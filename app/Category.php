<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'name','slug','body'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function scopeName($query,$name){
        return $query->where('name','LIKE',"%$name%");
    }
}
