@extends('layouts.app')

@section('title', 'ورود')

@section('content')

    <div class="content-wrap">

        <!--
                                    Banner

                                    Additional classes:
                                        .small
                                        .xsmall
                                        .big
                                        .full
                                    -->
        <section class="youplay-banner banner-top youplay-banner-parallax small">
            <div class="info">
                <div>
                    <div class="container">
                        <div class="youplay-login">

                            <div class="youplay-form text-center">
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
                                <h1>ورود به سایت</h1>
                                <form action="{{ route('login') }}" method="POST"> {{ csrf_field() }}
                                    <div class="youplay-input">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            placeholder="ایمیل" required autofocus>
                                    </div>
                                    <div class="youplay-input">
                                        <input type="password" id="password" name="password" value="{{ old('password') }}"
                                            placeholder="رمز عبور" required>
                                    </div>
                                    <div class="youplay-checkbox mb-15 ml-5">
                                        <a href="{{ route('password.request') }}">
                                            رمز عبور را فراموش کرده اید؟
                                        </a> | <a class="no-fade" data-toggle="modal" data-target="#nav-registration"
                                            href="#">ثبت نام</a>
                                    </div>
                                    <button class="btn btn-default db">ورود</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner -->
    @endsection
