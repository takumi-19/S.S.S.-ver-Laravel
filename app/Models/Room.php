<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function match()
    {
        return $this->belongsTo('App\Models\Match', 'match_id');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team', 'team_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'room_id');
    }
}
