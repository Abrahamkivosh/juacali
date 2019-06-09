<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Events;
use Faker\Generator as Faker;

$factory->define(Events::class, function (Faker $faker) {
    return [
        'time' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'venue'=>$faker->city,
        'location'=>$faker->country,
    ];
});
