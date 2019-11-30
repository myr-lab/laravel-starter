<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => \Str::slug($faker->name),
        'isActive' => $faker->numberBetween(0,1)
    ];
});
