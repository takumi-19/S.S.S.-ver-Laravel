@extends('layouts.temp_h')

@section('container')
<div class="CommentIndex">
  <div class="CommentMain">
    <div class="CommentMain__left">
      <div class="CommentHeader">
        <div class="CommentHeader__left">
          明治安田生命 J1 LEAGUE 第{{ $match->week }}節
        </div>
        <div class="CommentHeader__right">
          @if($away_team->id == $room->team_id)
            vs {{ $home_team->team_name }}
          @else
            vs {{ $away_team->team_name }}
          @endif
        </div>
      </div>
      <div class="CommentBody">
      </div>
    </div>
    <div class="CommentMain__right">
      <!-- <div class="Animation__pattern">
      </div> -->
      <div class="MatchResult">
        <div class="MatchResult__stadiumName">
          {{ $stadium->stadium_name }}
        </div>
        <div class="MatchResult__top">
          <div class="HomeTeam">
            <img src="{{ asset($home_team->team_logo) }}" alt="ホームチームエンブレム" class="HomeTeam__logo">
            <h4 class="HomeTeam__name">{{ $home_team->team_name }}</h4>
          </div>
          <h3 class="versus">vs</h3>
          <div class="AwayTeam">
            <img src="{{ asset($away_team->team_logo) }}" alt="アウェーチームエンブレム" class="AwayTeam__logo">
            <h4 class="AwayTeam__name">{{ $away_team->team_name }}</h4>
          </div>
        </div>
        <div class="MatchResult__bottom">
          <div class="HomeTeam__score">
            <h1>{{ $match->home_team_score }}</h1>
          </div>
          <h2>-</h2>
          <div class="AwayTeam__score">
            <h1>{{ $match->away_team_score }}</h1>
          </div>
        </div>
        <p>試合終了</p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('bottom_container')
<form action="{{route('rooms.comments.store', $room->id)}}" method="post" class="CommentForm">
  @csrf
  <div class="InputBox">
    <input type="text" name="content" placeholder="Maximum number of characters is 25." class="InputBox__text">
    <label>
      <i class="far fa-image"></i>
      <input type="file" class="Hidden">
    </label>
  </div>
  <label>
    <i class="fas fa-paper-plane"></i>
    <input type="submit" class="Hidden">
  </label>
</form>
@endsection