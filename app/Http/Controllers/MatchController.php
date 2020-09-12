<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Team;
use App\Models\Stadium;

class MatchController extends Controller
{
    public function show($id)
    {
        $match = Match::findOrFail($id);
        $teams = Team::all();
        $stadia = Stadium::all();
        $param = ['match' => $match, 'teams' => $teams, 'stadia' => $stadia];
        return view('matches/show', $param);
    }
}