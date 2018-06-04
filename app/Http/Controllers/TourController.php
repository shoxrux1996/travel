<?php

namespace App\Http\Controllers;

use App\Book;
use App\Notifications\BookNotification;
use App\Tour;
use App\Destination;
use App\Traveller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Session;
use DB;
class TourController extends Controller
{
    public function show($slug){

        $original=Tour::where('slug',$slug)->firstOrFail();
        $tour = $original->load('translations')->translate(Config::get('app.locale'),Cookie::get('languageSilk'));

        $faqs = $tour->faqs->translate(Config::get('app.locale'),Cookie::get('languageSilk'));
        $similars = Tour::where(function($query) use ($original){
        	$query->whereHas('categories',function($quer) use($original){
        	 	$quer->whereIn('id',$original->categories->pluck('id'));
        	})->orWhereHas('destination', function($quer)use($original){
        		$quer->where('id',$original->destination->id);
        	});
        })->where('id','!=',$original->id)->get()->shuffle()->take(3);
      	
        return view('detail-page')->withTour($tour)->withOriginal($original)->withFaqs($faqs)->withSimilars($similars);
    }

    public function result_list(Request $request){
        
        $destinations = Destination::where('parent_id','!=',null)->get();
        $tours = Tour::with('translations');
        $tour_destinations =Destination::query();
        if($request->destinations != null){
            $dest_names = $request->destinations;
            $tours->whereHas('startingPoint', function($query) use($dest_names){
                foreach ($dest_names as $key => $value) {
                    if($key == 0)
                        $query->where('name', $value);
                    else
                        $query->orWhere('name', $value);
                }
            })->orWhereHas('endingPoint', function($query) use($dest_names){
                foreach ($dest_names as $key => $value) {
                    if($key == 0)
                        $query->where('name', $value);
                    else
                        $query->orWhere('name', $value);
                }
            });
             foreach ($dest_names as $key => $value) {
                if($key == 0)
                    $tour_destinations = $tour_destinations->where('name', $value);
                else
                    $tour_destinations = $tour_destinations->orWhere('name', $value);
            }
            
        }else{
            $tour_destinations->where('name', $request->destination);
        }

        if($request->months != null){
            foreach ($request->months as $key => $value){   
                if($key == 0){
                    $tours->where(function($query) use ($value){
                        $query->whereMonth('from', '<=',$value)->whereMonth('to','>=',$value);
                    });
                }
                else{

                    $tours->orWhere(function($query) use ($value){
                        $query->whereMonth('from', '<=',$value)->whereMonth('to','>=',$value);
                    });
                }  
            }
        }

        if($request->search != null && $request->search != ''){
            $search = $request->search;
            $tours->whereHas('destination', function($query) use ($search){
                $query->where('name','LIKE',"%$search%")->orWhereHas('translations', function($quer) use($search){
                        $quer->where('value','LIKE',"%$search%")->where('column_name','name');
                    });
            })->orWhereHas('categories', function($query) use ($search){
                $query->where('name','LIKE',"%$search%")->orWhereHas('translations', function($quer) use($search){
                        $quer->where('value','LIKE',"%$search%")->where('column_name','name');
                    });
            })->orWhereHas('startingPoint', function($query) use ($search){
                $query->where('name','LIKE',"%$search%")->orWhereHas('translations', function($quer) use($search){
                        $quer->where('value','LIKE',"%$search%")->where('column_name','name');
                    });
            })->orWhereHas('endingPoint', function($query) use ($search){
                $query->where('name','LIKE',"%$search%")->orWhereHas('translations', function($quer) use($search){
                        $quer->where('value','LIKE',"%$search%")->where('column_name','name');
                    });
            })->orWhere('title', 'LIKE', "%$search%")
              ->orWhereHas('translations', function($quer) use($search){
                    $quer->where('value','LIKE',"%$search%")->where('column_name','title');
            })->orWhere('intro', 'LIKE', "%$search%")
              ->orWhereHas('translations', function($quer) use($search){
                        $quer->where('value','LIKE',"%$search%")->where('column_name','intro');
                    });
            
        }

        if($request->price_from != null || $request->price_to != null){
            if($request->price_from != 0)
                $tours=$tours->where('price','>=', $request->price_from);
            if($request->price_to != 2000)
                $tours=$tours->where('price', '<=', $request->price_to);
        }

        if($request->star_from != 0 || $request->star_to != 5){
            $star_from = $request->star_from;
            $star_to = $request->star_to;
            if($request->star_to != null){
                
                $tours= $tours->whereHas('comments', function($query) use($star_to){
                    $query->havingRaw('avg(rating) <= '.$star_to);
                });
            }
            if($request->star_from != null){

                $tours= $tours->whereHas('comments', function($query) use($star_from){
                    $query->havingRaw('avg(rating) >= '.$star_from);
                });
                if($star_from == 0){

                $tours->orDoesntHave('comments');
                
                }
            }            
        }
        $tours = $this->filter($request, $tours);

        if($request->result == "list"){
            Session::put('grid', false);
        }

        if($request->result == "grid" || Session::get('grid')){
            Session::put('grid', true);
            return view('result-grid')->withTours($tours->paginate(9))->withDestinations($destinations)->withInput($request->all())->withTourDestinations($tour_destinations->get());
        }
        
        return view('result-list')->withTours($tours->paginate(9))->withDestinations($destinations)->withInput($request->all())->withTourDestinations($tour_destinations->get());

    }
    protected function filter(Request $request, $orders){
         
        if ($request->filter == "name") {
            if(App::getLocale() != 'ru'){
                if (Session::get('sort')) {
                     $orders->join('translations', function ($join) {
                            $join->on('translations.foreign_key', '=', 'tours.id')
                             ->where('translations.table_name', 'tours')
                             ->where('locale',App::getLocale())
                             ->where('column_name','title');
                        })->select('tours.*', 'translations.value')->orderBy('value','desc');

                    Session::put('sort', false);
                } else {
                    $orders->join('translations', function ($join) {
                            $join->on('translations.foreign_key', '=', 'tours.id')
                             ->where('translations.table_name', 'tours')
                             ->where('locale',App::getLocale())
                             ->where('column_name','title');
                        })->select('tours.*', 'translations.value')->orderBy('value','asc');
                        
                    Session::put('sort', true);
                }     
            }
            else{
               if (Session::get('sort')) {
                $orders = $orders
                    ->orderBy('title', 'desc');
                /** @noinspection PhpUndefinedMethodInspection */
                Session::put('sort', false);
                } else {
                    $orders = $orders
                        ->orderBy('title', 'asc');
                    /** @noinspection PhpUndefinedMethodInspection */
                    Session::put('sort', true);
                } 
            }
            
        }
        
        if ($request->filter == "price") {
            /** @noinspection PhpUndefinedMethodInspection */
            if (Session::get('sort')) {
                $orders = $orders
                    ->orderBy('price', 'desc');
                /** @noinspection PhpUndefinedMethodInspection */
                Session::put('sort', false);
            } else {
                $orders = $orders
                    ->orderBy('price', 'asc');
                /** @noinspection PhpUndefinedMethodInspection */
                Session::put('sort', true);
            }
        }
        if ($request->filter == "location") {
            /** @noinspection PhpUndefinedMethodInspection */
            if(App::getLocale() != 'ru'){
                if (Session::get('sort')) {
                     $orders->join('destinations','destinations.id','=','tours.destination_id')
                        ->join('translations', function ($join) {
                            $join->on('translations.foreign_key', '=', 'tours.destination_id')
                             ->where('translations.table_name', 'destinations')
                             ->where('locale',App::getLocale())
                             ->where('column_name','name');
                        })->select('tours.*', 'translations.value')->orderBy('value','desc');

                    Session::put('sort', false);
                } else {
                    $orders->join('destinations','destinations.id','=','tours.destination_id')
                        ->join('translations', function ($join) {
                            $join->on('translations.foreign_key', '=', 'tours.destination_id')
                             ->where('translations.table_name', 'destinations')
                             ->where('locale',App::getLocale())
                             ->where('column_name','name');
                        })->select('tours.*', 'translations.value')->orderBy('value','asc');
                        
                    Session::put('sort', true);
                }     
            }else{
                if (Session::get('sort')) {
                $orders = $orders
                    ->whereHas('destination', function($query){
                        $query->orderBy('name', 'desc');
                    });
                /** @noinspection PhpUndefinedMethodInspection */
                Session::put('sort', false);
                } else {
                    $orders = $orders
                        ->whereHas('destination', function($query){
                            $query->orderBy('name', 'asc');
                        });
                    /** @noinspection PhpUndefinedMethodInspection */
                    Session::put('sort', true);
                }
            }
            
        }
        if ($request->filter == "rating") {
            /** @noinspection PhpUndefinedMethodInspection */
            if (Session::get('sort')) {
                $orders = $orders->withCount([
                    'comments as stars'=>function($query){
                        return $query->select(DB::raw('avg(rating)'));
                    }
                ])->orderBy('stars','desc');
                
                Session::put('sort', false);
            } else {
                // $orders = DB::select(DB::raw('select *, avg(rating) as stars from tours inner join comments on tours.id = comments.tour_id group by tour_id order by stars asc'));
                $orders = $orders->withCount([
                    'comments as stars'=>function($query){
                        return $query->select(DB::raw('avg(rating)'));
                    }
                ])->orderBy('stars','asc');
               
                Session::put('sort', true);
            }
        }

        return $orders;
    }
    public function payment($id){
        $tour = Tour::findOrFail($id);
        return view('payment')->withTour($tour);
    }
    public function book(Request $request, $id){
        $vars = array();
       $request->validate([
            'firstName.*'=>'required',
            'lastName.*'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);

        $tour = Tour::findOrFail($id);
        $book = new Book;
        $book->firstName = $request->firstName[0];
        $book->lastName = $request->lastName[0];
        $book->email = $request->email;
        $book->phone = $request->phone;
        if($request->year[0] != null && $request->month[0] != null && $request->date[0] != null)
            $book->date = Carbon::create($request->year[0],$request->month[0], $request->date[0]);
        if($request->gender[0] != null)
            $book->gender = $request->gender[0];
        $book->nationality = $request->nationality;
        $book->address = $request->address;
        $book->city =$request->city;
        $book->postal = $request->postal;
        $book->country = $request->country;
        $book->price = $tour->price*(count($request->firstName));
        $tour->books()->save($book);
        for($i=1; $i<count($request->firstName); $i++){
            $traveller = new Traveller;
            $traveller->firstName =$request->firstName[$i];
            $traveller->lastName =$request->lastName[$i];
            $traveller->gender = $request->gender[$i];
            if($request->year[$i] != null && $request->month[$i] != null && $request->date[$i] != null)
                $traveller->date = Carbon::create($request->year[$i],$request->month[$i], $request->date[$i]);
            $book->travellers()->save($traveller);
        }
        $book->notify( new BookNotification());
        return redirect()->route('confirmed',$book->id)->with(['message'=>'Спасибо','text' => 'Ваше бронирование успешно принято!']);
    }
    public function complete($id){
        if(Session::has('message'))
        {
            $book = Book::findOrFail($id);
            return view('confirmation')->withBook($book);
         }
        else{
            return redirect()->route('home');
        }
    }
}
