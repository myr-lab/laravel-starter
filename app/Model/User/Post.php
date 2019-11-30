<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public function category(){

    	return $this->belongsTo(Category::class);
    }
}
