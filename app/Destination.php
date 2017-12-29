<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Destination extends Model
{
    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    public function children()
    {
        return $this->hasMany(self::class);
    }
}
