<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user_table', 'user_id', 'role_id');
    }

}
