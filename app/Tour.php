<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Tour extends Model
{
    public function categories(){
        return $this->belongsToMany(Voyager::modelClass('Category'));
    }
}
