<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $guarded = [];
    public function album()
    {
        return $this->belongsTo(Albums::class);
    }

}
