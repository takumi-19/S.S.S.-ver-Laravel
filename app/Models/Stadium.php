<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public function matches()
    {
        return $this->hasMany('App\Models\Match');
    }
}
