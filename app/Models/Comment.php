<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }
    
    public function room()
    {
        return $this->hasOne('App\Models\Room');
    }
}
