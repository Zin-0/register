@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="login-form-top">
        <p>ログイン</p>
    </div>
    <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-form-content">
            <div class="login-form-item">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス" />
            </div>
            <div class="form-error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login-form-content">
            <div class="login-form-item">
                <input type="password" name="password"  placeholder="パスワード" />
            </div>
            <div class="form-error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login-form-content">
            <div class="login-form-btn">
                <input type="submit" name="button" value="ログイン" />
            </div>
        </div>
    </form>
    <div class="login-btm">
        <p class="login-text">アカウントをお持ちでない方はこちらから</p>
        <a href="/register">会員登録</a>
    </div>
</div>
@endsection