@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="registration">
        <div class="registration-form-top">
            <p>会員登録</p>
        </div>
    <form class="registration-form" action="/register" method="post">
        @csrf
        <div class="registration-form-item">
            <div class="registration-form-content">
                <div class="registration-form--text">
                    <input type="text" class="form-item" name="name" placeholder="名前" value="{{ old('name') }}" />
                </div>
                <div class="form-error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="registration-form-item">
            <div class="registration-form-content">
                <div class="registration-form--text">
                    <input type="email" class="form-item" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                </div>
                <div class="form-error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="registration-form-item">
            <div class="registration-form-content">
                <div class="registration-form--text">
                    <input type="password" class="form-item" name="password" placeholder="パスワード" />
                </div>
                <div class="form-error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="registration-form-item">
            <div class="registration-form-content">
                <div class="registration-form--text">
                    <input type="password" class="form-item" name="password_confirmation" placeholder="確認用パスワード" />
                </div>
            </div>
        </div>
        <div class="registration-form-item">
            <input type="submit" class="form-btn" name="button" value="会員登録">
        </div>
    </form>
    <div class="login-btm">
        <p class="login-text">アカウントをお持ちの方はこちらから</p>
        <a href="/login">ログイン</a>
    </div>
</div>
@endsection