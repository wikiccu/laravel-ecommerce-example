@extends('layouts.app')

@section('title', 'ورود')

@section('content')
    <div class="container">
        <div class="info">
            <div>
                <div class="container">

                    <div class="youplay-login">
                        @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="youplay-form text-center">
                            <h1>ورود به سایت</h1>
                            <form action="{{ route('login') }}" method="POST"> {{ csrf_field() }}
                                <div class="youplay-input">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Email" required autofocus>
                                </div>
                                <div class="youplay-input">
                                    <input type="password" id="password" name="password" value="{{ old('password') }}"
                                        placeholder="Password" required>
                                </div>
                                <div class="youplay-input">

                                </div>
                                <div class="youplay-checkbox mb-15 ml-5">
                                    <input type="checkbox" id="nav-rememberme" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="nav-rememberme">مرا به خاطر بسپار</label>
                                </div>
                                <button type="submit" class="btn btn-default db">ورود</button>
                                <div class="spacer"></div>
                                <a href="{{ route('password.request') }}">
                                    رمز عبور را فراموش کرده اید؟
                                </a>
                            </form>
                        </div>
                        <div class="spacer"></div>
                        <a href="{{ route('register') }}" class="auth-button-hollow">ایجاد حساب جدید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
