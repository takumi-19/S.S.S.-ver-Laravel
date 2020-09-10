<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class MatchController extends Controller
{
    public function show ()
    {
        $teams = Team::all();
        $param = ['teams' => $teams];
        return view('matches/show', $param);
    }
}

