<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Spatial;
class Destination extends Model
{
    use Spatial;
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    public function children()
    {
        return $this->hasMany(self::class);
    }
}
