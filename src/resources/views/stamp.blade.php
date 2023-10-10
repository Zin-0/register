@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('header')
<nav>
    <ul class="header-nav">
        <li class="header-nav__item">
            <a class="header-nav__link" href="/">ホーム</a>
        </li>
        <li class="header-nav__item">
            <a class="header-nav__link" href="/date">日付一覧</a>
        </li>
        <li class="header-nav__item">
          <form class="form" action="/logout" method="post">
            @csrf
            <button class="header-nav__button">ログアウト</button>
          </form>
        </li>
    </ul>
</nav>
@endsection

@section('content')
<div class="attendance__header">
  <div>
  </div>
</div>

<div class="attendance__content">
  <div class="attendance__title">
    <div>{{$user->name}}さんお疲れ様です！</div>
  </div>
      <div class="attendance__panel">
          <div class="attendance__button">
            <form class="attendance__form"  action="/work/start" method="post">
              @csrf
              @if ($number == 0)
              <button class="attendance__button-submit" type="submit">勤務開始</button>
              @else
              <button class="attendance__button-disabled" type="submit" disabled>勤務開始</button>
              @endif
            </form>
            <form class="attendance__form"  action="/work/end" method="post">
              @csrf
              @if ($number == 1)
              <button class="attendance__button-submit" type="submit">勤務終了</button>
              @else
              <button class="attendance__button-disabled" type="submit" disabled>勤務終了</button>
              @endif
            </form>
          </div>
          <div class="attendance__button">
            <form class="attendance__form"  action="/break/start" method="post">
              @csrf
              @if ($number == 1)
              <button class="attendance__button-submit" type="submit">休憩開始</button>
              @else
              <button class="attendance__button-disabled" type="submit" disabled>休憩開始</button>
              @endif
            </form>
            <form class="attendance__form"  action="/break/end" method="post">
              @csrf
              @if ($number == 2)
              <button class="attendance__button-submit" type="submit">休憩終了</button>
              @else
              <button class="attendance__button-disabled" type="submit" disabled>休憩終了</button>
              @endif
            </form>
          </div>
      </div>
    
</div>
@endsection