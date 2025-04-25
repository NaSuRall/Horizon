@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <header>
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <video autoplay muted loop id="bgVideo">
                <source src="{{ asset('videos/videos.mp4') }}" type="video/mp4">
                Ton navigateur ne supporte pas la vidéo.
            </video>
            <div class="nav-left">
                <a href=""><img src="{{ asset('img/maxxess.png') }}" alt=""></a>
                <a href=""><img src="{{ asset('img/Honda.png') }}" alt=""></a>
                <a href=""><img src="{{ asset('img/suzuki.svg') }}" alt=""></a>
                <a href="" style="background-color: black"><img src="{{ asset('img/kawazaki.webp') }}" alt=""></a>
                <a href="" style="background-color: #FE6702"><img src="{{ asset('img/KTM-Logo.png') }}" alt=""></a>
                <!--  il en manque un -->
            </div>
        </header>
    </div>
    @include('components.navbar')
@endsection
