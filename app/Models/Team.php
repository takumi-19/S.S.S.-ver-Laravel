<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function stadia()
    {
        return $this->hasMany('App\Models\Stadium');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function matches()
    {
        return $this->hasMany('App\Models\Match');
    }
}
