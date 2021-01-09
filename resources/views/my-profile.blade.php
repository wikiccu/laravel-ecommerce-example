@extends('layouts.app')
@section('title', 'پروفایل من')

@section('content')
    <div class="container">
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
    </div>
    <div class="content-wrap no-banner">
        <div class="container youplay-store store-grid mt-0">

            <div class="row">

                <div class="col-md-9">

                    <h3 class="mt-0 mb-20">{{ Auth::user()->name }}</h3>  
                    <form action="{{ route('users.update') }}" method="POST">
                        @method('patch')
                        @csrf

                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td style="width: 200px;">
                                        <div class="youplay-input"><input id="name" type="text" name="name"
                                                value="{{ old('name', $user->name) }}" placeholder="نام و نام خانوادگی"
                                                required></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="youplay-input"><input id="email" type="email" name="email"
                                                value="{{ old('email', $user->email) }}" placeholder="ایمیل" required></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="youplay-input"><input id="password" type="password" name="password"
                                                placeholder="رمز عبور">
                                        </div>
                                        <div>برای استفاده از همین رمز عبور این فیلد را خالی بگذارید</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="youplay-input"><input id="password-confirm" type="password"
                                                name="password_confirmation" placeholder="تایید رمز عبور"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn active btn-success">ذخیره تغییرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
