<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $guarded = [];

    public function Album()
    {
        return $this->belongsTo(Albums::class);
    }
}
