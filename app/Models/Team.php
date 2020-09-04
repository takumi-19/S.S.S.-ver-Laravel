<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function stadia()
    {
        return $this->hasMany('App\Models\Stadium', 'team_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'team_id');
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player', 'team_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'team_id');
    }

    public function matches()
    {
        return $this->hasMany('App\Models\Match');
    }
}
