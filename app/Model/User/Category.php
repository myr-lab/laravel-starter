<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){

    	return $this->hasMany(Post::class,'category_id');
    }
}
