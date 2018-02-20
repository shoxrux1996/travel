<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Program extends Model
{
    use Translatable;
    protected $translatable = ['title', 'text','place','trip_time'];

}
