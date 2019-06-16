<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Tshirt','Cap','shoes','trouser']),
        'description'=>$faker ->paragraph(1,1)
    ];
});
