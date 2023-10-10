@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
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
<div class="date__header">
</div>

<div class="date">
    <table class="date__table">
        <tr class="date__tr">
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
        @foreach ($day_works as $day_work)
        <tr class="date_tr">
            <td>{{$day_work->getName()}}</td>
            <td>{{$day_work->start_time->toTimeString()}}</td>
            <td>{{$day_work->end_time->toTimeString()}}</td>
            <td><!--@if($day_work->breaking())
                {{$day_work}}
                @endif
                -->
            </td>
            <td></td>
        </tr>
        @endforeach
    </table>
    {{ $day_works->links() }}
</div>
@endsection