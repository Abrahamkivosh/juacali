<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'=>$faker->paragraph(1,2),
        'description'=>$faker->paragraphs(3,4),
        'user_id' =>$faker->numberBetween(1,6),
        'file' =>$faker->imageUrl($width = 640, $height = 480)
    ];
});
