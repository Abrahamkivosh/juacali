<?php

use Illuminate\Database\Seeder;
use App\Products;
use App\Albums;
use App\Audio ;
use App\Videos;
use App\Events;
use App\User;

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

    }
}
