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
    public function price(){
        return $this->tours()->orderBy('price')->first() != null ? $this->tours()->orderBy('price')->first()->price : "";
    }
}
