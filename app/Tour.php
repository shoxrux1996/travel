<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Hotel;
use App\Destination;

class Tour extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description','intro','hotels','viza','includes'];
    public function categories(){
        return $this->belongsToMany(Voyager::modelClass('Category'),'tour_category');
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    public function destinationId(){
        return $this->belongsTo(Destination::class);
    }
    public function destinationIdList(){
        return Destination::where('parent_id',null)->get();
    }
    public function startId(){
        return $this->belongsTo('App\Destination','start_id');
    }
    public function startIdList(){
        return Destination::where('parent_id','!=',null)->get();
    }
    public function startingPoint(){
        return $this->belongsTo(Destination::class,'start_id');
    }
    public function endIdList(){
        return Destination::where('parent_id','!=',null)->get();
    }
    public function endId(){
        return $this->belongsTo(Destination::class);
    }
    public function endingPoint(){
        return $this->belongsTo(Destination::class,'end_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function rating(){
        return round($this->comments()->avg('rating'),1);
    }

    public function ratingType(){
        switch (round($this->rating())) {
            case 0:
                # code...
                return "Poor";
                break;
            case 1:
                # code...
                return "Fair"; 
                break;
            case 2:
                # code...
                return "Average";
                break;  
            case 4:
                # code...
                return "Good";
                break;   

            case 5:
                # code...
                return "Excellent";
                break;
            default:
                return null;
                # code...
                break;
        }
    }

    public function ratingPercentage(){
        return $this->comments->count() ? round($this->comments()->where('rating','>=',3)->count()*100/$this->comments()->count()) : 0;
    }
    public function image_crop($image){
        $ext = explode('.', $image);
        $extension = '.' . $ext[count($ext) - 1];
        $path = str_replace($extension, '', $image);

        $thumb_name = "small";
        return $path . '-' . $thumb_name . $extension;
    }

    public function programs(){
        return $this->hasMany(Program::class)->orderBy('order');
    }
    public function accommodations(){
        return $this->belongsToMany('App\Hotel','tour_hotel');
    }
    public function faqs(){
        return $this->belongsToMany('App\Faq','tour_faq');
    }
    public function books(){
        return $this->hasMany('App\Book');
    }
}
