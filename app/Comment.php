<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
	protected $fillable = ['name','email','text','rating'];
    public function tour(){
        return $this->belongsTo(Tour::class);
    }

}
