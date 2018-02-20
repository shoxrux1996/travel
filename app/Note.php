<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;


class Note extends Model
{
    protected $fillable = ['name','email','message'];
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function parentId(){
        return $this->belongsTo(self::class);
    }
    public function children(){
        return $this->hasMany(self::class,'parent_id')->orderBy('created_at','desc');
    }

}
