<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function stadium()
    {
        return $this->hasOne('App\Models\Stadium');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function home_team(){
        return $this->hasOne('App\Models\Team','home_team_id', 'id');
    }

    public function away_team(){
        return $this->hasOne('App\Models\Team','away_team_id', 'id');
    }
}
