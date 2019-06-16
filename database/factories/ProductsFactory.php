<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween(1,6),
        'name' => $faker->words(2,6),
        'description'=>$faker->paragraph(1,2),
        'photo'=>$faker->imageUrl(250, 250, 'cats', true, 'Faker'),
        'type'=>$faker->words(2,3),
        'quantity'=>$faker->numberBetween(10,20),
        'size'=>$faker->randomElement(['small','madium','large']),
        'material'=>$faker->randomElement(['cotton','nywlon']),
        'price'=>$faker->numberBetween(1230,9000),
        'color'=>$faker->colorName
    ];
});
