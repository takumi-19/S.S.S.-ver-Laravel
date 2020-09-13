@extends('layouts.temp_hf')

@section('container')
<div class="MatchShow">
  <div class="MatchTitle">
    <div class="MatchTitle__matchName">
      明治安田生命Ｊ１リーグ 第{{ $match->week }}節
    </div>
    <div class="MatchTitle__stadiumName">
    {{ $match->stadium->stadium_name }}
    </div>
  </div>
  <div class="MatchCard">
    <a href="{{ route('room.show', $home_team_room->id) }}" class="HomeTeam Btn">
      <div class="Btn__text">
        HOME TEAM
      </div>
      <div class="Btn__teamLogo">
        <img src={{ asset($match->home_team->team_logo) }} alt="ホームチームエンブレム" class="Btn__teamLogo--home">
      </div>
      <div class="Btn__teamName">
        {{ $match->home_team->team_name }}
      </div>
    </a>
    <a href="{{ route('room.show', $away_team_room->id) }}" class="AwayTeam Btn">
      <div class="Btn__text">
        AWAY TEAM
      </div>
      <div class="Btn__teamLogo">
        <img src={{ asset($match->away_team->team_logo) }} alt="アウェーチームエンブレム" class="Btn__teamLogo--away">
      </div>
      <div class="Btn__teamName">
        {{ $match->away_team->team_name }}
      </div>
    </a>
  </div>
</div>
@endsection