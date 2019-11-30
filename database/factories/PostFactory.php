<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User\Post;
use App\Model\User\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug'  => \Str::slug($faker->sentence),
        'body'  => $faker->paragraph,
        'user_id' => 1,
        'category_id' => function() {
                            return Category::all()->random();
                         },
        'isActive' => $faker->numberBetween(0,1),
        'view_count' => $faker->numberBetween(100,1000),
        'love' => $faker->numberBetween(100,1000)


    ];
});
