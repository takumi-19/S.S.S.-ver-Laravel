<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomCommentController extends Controller
{
    public function index () 
    {
        return view('comments/index');
    }
}
