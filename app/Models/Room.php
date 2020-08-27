<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function match()
    {
        return $this->hasOne('App\Models\Match');
    }

    public function team()
    {
        return $this->hasOne('App\Models\Team');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
