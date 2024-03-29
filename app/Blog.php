<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}
