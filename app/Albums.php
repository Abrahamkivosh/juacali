<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $guarded = [];

    public function audios()
    {
        return $this->hasMany('App\Audio','album_id','id');
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

}
