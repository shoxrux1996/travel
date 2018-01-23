<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Tour extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description','about','pricebox','hotels','viza','program'];
    public function categories(){
        return $this->belongsToMany(Voyager::modelClass('Category'));
    }
    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function rating(){
        return $this->comments()->sum('rating')/$this->comments()->count();
    }
}
