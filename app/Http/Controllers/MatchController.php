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
        $home_team_room = $match->rooms->where('team_id', $match->home_team_id)->first();
        $away_team_room = $match->rooms->where('team_id', $match->away_team_id)->first();
        $teams = Team::all();
        $stadia = Stadium::all();
        $param = ['match' => $match, 'teams' => $teams, 'stadia' => $stadia, 'home_team_room' => $home_team_room, 'away_team_room' => $away_team_room];
        return view('matches/show', $param);
    }
}