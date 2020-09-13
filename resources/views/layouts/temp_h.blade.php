@extends('layouts.app')

@section('body')
<header>
  <a href='/', class="HeaderLodo">
    <div class="HeaderLodo__left">
      S.S.S.
    </div>
    <div class="HeaderLodo__right">
      Soccer<br>
      Supporter's<br>
      Stadium
    </div>
  </a>
  <div class="HeaderIcons">
    <div class="HeaderIcons__team">
      <a href="#" class="Icon__btn">
        <img src={{ asset("image/j1_team_emblem/img_club_gosaka.png") }} alt="サポートチームのロゴ">
      </a>
    </div>
    <div class="HeaderIcons__supporter">
      <a href="#" class="Icon__btn">
        <img src={{ asset("image/default-user-icon.jpg") }} alt="ユーザーアイコン">
      </a>
    </div>
  </div>
</header>
<main>
  @yield("container")
</main>
@endsection

