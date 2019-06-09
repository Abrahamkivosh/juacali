<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Audio;
use Faker\Generator as Faker;

$factory->define(Audio::class, function (Faker $faker) {
    return [
        'name'=>$faker->words(2,4),

        'description'=>$faker->paragraph(1,2)
    ];
});
