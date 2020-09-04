@extends('layouts.temp_hf')

@section('container')
<div class="Stadium">
  <h1 class="Stadium__text">Studium</h1>
  <h6 class="Stadium__caution">※ 試合開始2時間前から入場できます</h6>
  <div class="Stadium__lists">
    @foreach($stadia as $stadium)
    <div class="Stadium__list">
      <h5 class="Stadium__name">{{ $stadium->stadium_name }}</h5>
      @foreach($stadium->matches->all() as $match)
      @if (strtotime("now") <= strtotime($match->kick_off . '+150 minute'))
      <a href="{{ action('MatchController@show', $match->id) }}" class="Stadium__btn">
        <div class="Stadium__btn--top">
          <p class="Left">NEXT GAME</p>
          <p class="Right">第{{ $match->week }}節</p>
        </div>
        <div class="Stadium__btn--bottom">
          <img src="image/{{ $match->home_team->team_logo }}" alt="ホームチームエンブレム" class="Btn__teamLogo--home">
          <span class="#{$match->home_team->team_color}"></span>
          <h3 class="Btn__teamName--home">{{ $match->home_team->team_name }}</h3>
          <h4 class="Btn__versus">VS</h4>
          <h3 class="Btn__teamName--away">{{ $match->away_team->team_name }}</h3>
          <span class="#{$match->away_team->team_color}"></span>
          <img src="image/{{ $match->away_team->team_logo }}" alt="アウェーチームエンブレム" class="Btn__teamLogo--away">
          <h3 class="KickoffTime">{{ date('m/d H:i', strtotime($match->kick_off)) }}KO</h3>
        </div>
      </a>
      @break
      @elseif (strtotime("now") <= strtotime($match->kick_off . '+150 minute'))
      <div class="Stadium__btn Opacity">
        <div class="Stadium__btn--top">
          <p class="Left">NEXT GAME</p>
          <p class="Right">第{{ $match->week }}節</p>
        </div>
        <div class="Stadium__btn--bottom">
          <img src="image/{{ $match->home_team->team_logo }}" alt="ホームチームエンブレム" class="Btn__teamLogo--home">
          <span class="#{$match->home_team->team_color}"></span>
          <h3 class="Btn__teamName--home">{{ $match->home_team->team_name }}</h3>
          <h4 class="Btn__versus">VS</h4>
          <h3 class="Btn__teamName--away">{{ $match->away_team->team_name }}</h3>
          <span class="#{$match->away_team->team_color}"></span>
          <img src="image/{{ $match->away_team->team_logo }}" alt="アウェーチームエンブレム" class="Btn__teamLogo--away">
          <h3 class="KickoffTime">{{ date('m/d H:i', strtotime($match->kick_off)) }}KO</h3>
        </div>
      </div>
      @break
      @elseif ( $loop->last )
      <div class="ComingSoon">
        <h3>COMING SOON</h3>
      </div>
      @endif
      @endforeach
    </div>
    @endforeach
  </div>
</div>
@endsection