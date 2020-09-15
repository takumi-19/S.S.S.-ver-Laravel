<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'room_id');
    }

    protected $fillable = ['content', 'image', 'user_id', 'room_id'];
    protected $table = 'comments';
}
