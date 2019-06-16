<?php

use Illuminate\Database\Seeder;
use App\Products;
use App\Albums;
use App\Audio ;
use App\Videos;
use App\Events;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Category;

class All_seeder_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(User::class,10)->create();
        Factory(Albums::class,4)->create()->each(function ($album) {
            $album->audios()->save(factory(Audio::class)->make());
        });
        Factory(Events::class,10)->create();
        Factory(Category::class,6)->create();
        Factory(Products::class,40)->create();

        DB::table('users')->insert([
            'name' => 'Abraham Kivondo',
            'email' => 'abrahamkivosh@gmail.com',
            'phone' => '0707585566',
            'password' => '$2y$10$R98BYALxEPcH0TlGK3xckOmpLaFHoGKgHTg38wBIOv1NVGkWVNS6y' //12345678
        ]);

    }
}
