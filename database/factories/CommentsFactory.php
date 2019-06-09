<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'=>$faker->paragraphs(1,1),
        'user_id'=>$faker->numberBetween(1,6),
        'commentable_id' => $faker->numberBetween(1,6),
        'commentable_type'=>$faker->numberBetween(1,6),

    ];
});
