<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Albums;
use Faker\Generator as Faker;

$factory->define(Albums::class, function (Faker $faker) {
    $dir = storage_path('albums');
    return [
        'name' => $faker->name ,
        'produced' => $faker ->date($format = 'Y-m-d', $max = 'now') ,// '1979-06-09'
        'photo'=> $faker-> imageUrl(250, 250, 'cats', true, 'Faker'),
        'description' => $faker->paragraph(1,2),


    ];
});
