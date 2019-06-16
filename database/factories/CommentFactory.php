<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'=>$faker->paragraph(1,1),
        'user_id'=>$faker->numberBetween(1,10),
        'commentable_id'=>$faker->numberBetween(1,10),
        'commentable_type'=>$faker->randomElement(['Audio','video'])
    ];
});
