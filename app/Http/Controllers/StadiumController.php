<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stadium;
use App\Models\Team;

class StadiumController extends Controller
{
    public function index () 
    {
        $stadia = Stadium::with('matches')->get();
        $teams = Team::all();
        $param = ['stadia' => $stadia, 'teams' => $teams];
        return view('stadia/index', $param);
    }
}
