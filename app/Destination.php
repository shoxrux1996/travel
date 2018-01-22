<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;
class Destination extends Model
{
    use Translatable;
    protected $translatable = ['name', 'text'];
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    public function children()
    {
        return $this->hasMany(self::class);
    }
}
