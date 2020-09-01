<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
