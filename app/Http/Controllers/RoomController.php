<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show($id)
    {
        return view('rooms/show');
    }

}
