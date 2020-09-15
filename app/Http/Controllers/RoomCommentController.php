<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Room;
use App\Models\Match;
use App\Models\Team;
use App\Models\Stadium;

class RoomCommentController extends Controller
{
    private $user;

    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {

    //         $this->user = \Auth::user();

    //         return $next($request);
    //     });
    // }

    public function index($room_id)
    {
        $room = Room::findOrFail($room_id);
        $match = Match::findOrFail($room->match_id);
        $home_team = Team::findOrFail($match->home_team_id);
        $away_team = Team::findOrFail($match->away_team_id);
        $teams = Team::all();
        $stadium = Stadium::findOrFail($match->stadium_id);
        $param = ['room' => $room, 'match' => $match, 'home_team' => $home_team, 'away_team' => $away_team, 'teams' => $teams, 'stadium' => $stadium];
        return view('comments/index', $param);
    }

    public function store(Request $request, $room_id) {
        $create_comment = new Comment();
        $create_comment->content = $request['content'];
        $create_comment->image = $request['image'];
        $create_comment->user_id = 1;
        $create_comment->room_id = $room_id;
        $create_comment->save();
        return redirect(route('rooms.comments.index', $room_id));
    }
}
