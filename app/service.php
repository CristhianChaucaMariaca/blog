<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = [
        'name','excerpt','description','status'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
