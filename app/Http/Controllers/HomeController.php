<?php

namespace App\Http\Controllers;

use App\Destination;
use function foo\func;
use Illuminate\Http\Request;
use App\Tour;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::with('translations')->orderByRaw("RAND()")->take(9)->get();
        $destinations = Destination::where('parent_id',null)->get();
        $topDestinations = Destination::where('parent_id',null)
            ->withCount('tours as tours_count')->orderBy('tours_count','desc')->get()->take(4);


        return view('home')->withTours($tours)->withDestinations($destinations)->withTopdestinations($topDestinations);
    }
}
