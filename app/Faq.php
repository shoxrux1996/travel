<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fcategory;
use TCG\Voyager\Traits\Translatable;
class Faq extends Model
{
	use Translatable;
    protected $translatable = ['title', 'text'];
    public function fcategoryId(){
    	return $this->belongsTo(Fcategory::class);
    }
    public function fcategories(){
    	return $this->belongsTo(Fcategory::class);
    }
}
