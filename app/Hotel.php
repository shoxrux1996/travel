<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Hotel extends Model
{
    use Spatial;
	public function tours(){
        return $this->belongsToMany('App\Tours','tour_hotel');
    }
}
