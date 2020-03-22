<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'name','slug'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function scopeName($query, $name)
    {
        return $query->where('name','LIKE',"%$name%");
    }
}
