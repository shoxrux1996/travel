<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Faq;

class Fcategory extends Model
{
	use Translatable;
    protected $translatable = ['name'];
    public $timestamps = false;

    public function faqs(){
    	return $this->hasMany('App\Faq');
    }
}
