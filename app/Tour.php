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
}
