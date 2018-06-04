<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
use TCG\Voyager\Traits\Translatable;
class Destination extends Model
{
    use Translatable;
    protected $translatable = ['name', 'text'];
    public function parentId()
    {
        return $this->belongsTo(self::class,'parent_id');
    }
    public function parentIdList(){
        return Destination::where('parent_id',null)->get();
    }
    public function children()
    {
        return $this->hasMany(self::class);
    }
    public function tours(){
        return $this->hasMany(Tour::class);
    }
    public function toursStarting(){
        return $this->hasMany(Tour::class,'start_id');
    }
    public function toursEnding(){
        return $this->hasMany(Tour::class,'end_id');
    }
    public function tourlist(){
        return $this->toursStarting()->union($this->toursEnding());
    }
    public function price(){
        return $this->tourlist()->orderBy('price')->first() != null ? $this->tourList()->orderBy('price')->first()->price : "";
    }
}
