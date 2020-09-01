<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }
}
