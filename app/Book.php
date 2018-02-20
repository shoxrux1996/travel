<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Book extends Model
{
    use Notifiable;
    public function travellers(){
        return $this->hasMany('App\Traveller');
    }
    public function tour(){
        return $this->belongsTo('App\Tour');
    }
}
