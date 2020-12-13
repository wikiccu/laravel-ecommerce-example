<!DOCTYPE html>
<!--
    Name: Youplay - Game Template based on Bootstrap
    Version: 3.3.0
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->
    
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Play Center | @yield('title') </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="description" content="Youplay - Gaming HTML Template based on Bootstrap">
    <meta name="keywords" content="gaming, game, community, template, html, bootstrap, webpack">

    <link rel="icon" type="image/png" href="{{ asset('images/dark/icon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" />

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('vendor/flickity/dist/flickity.min.css') }}" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/dist/magnific-popup.css') }}" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('vendor/slider-revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slider-revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slider-revolution/css/navigation.css') }}">

    <!-- Bootstrap Sweetalert -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-sweetalert/dist/sweetalert.css') }}" />

    <!-- Social Likes -->
    <link rel="stylesheet" href="{{ asset('vendor/social-likes/dist/social-likes_flat.css') }}" />

    <!-- FontAwesome -->
    <script defer src="{{ asset('vendor/font-awesome/svg-with-js/js/fontawesome-all.min.js') }}"></script>
    <script defer src="{{ asset('vendor/font-awesome/svg-with-js/js/fa-v4-shims.min.js') }}"></script>

    <!-- Youplay -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/youplay.css') }}">

    <!-- RTL (uncomment this to enable RTL support) -->
    <link rel="stylesheet" href="{{ asset('css/youplay-rtl.min.css') }}" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }} "></script>
    
</head>


