<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $guarded = [];

    public function category(){

    	return $this->belongsTo(Category::class);
    }

    public function user(){

    	return $this->belongsTo(\App\User::class);
    }
}
