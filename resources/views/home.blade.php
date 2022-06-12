@extends('layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/content-home.css') }}">
@stop

@section('content')
    <h1>Last Embassy News</h1>
    <a class="news-block-left" href="{{ route('news1') }}">
        <img class="image" src="{{ asset('img/home/biden-1.png') }}" alt="">
        <div class="overlay">
            <div class="text">Statement by President Joe Biden on Additional Security Assistance to Ukraine</div>
        </div>
    </a>

    <a class="news-block-center" href="{{ route('news2') }}">
        <img class="image" src="{{ asset('img/home/biden-2.png') }}" alt="">
        <div class="overlay">
            <div class="text">President Biden on Staying the Course in Ukraine</div>
        </div>
    </a>

    <a class="news-block-right" href="{{ route('news3') }}">
        <img class="image" src="{{ asset('img/home/default-blog-seal.png') }}" alt="">
        <div class="overlay">
            <div class="text">Statement by President Joe Biden on Additional Security Assistance to Ukraine</div>
        </div>
    </a>

    <br>

    <!------------------------------------------------------------------>
    <h1>Embassy Actions</h1>

    <a class="left-container"  href="{{ route('visas', ['#registration-form-location']) }}">
        <img class="image" src="{{ asset('img/home/avatar.png') }}" alt="">
        <div class="overlay">
            <div class="text">Click to register Your documents</div>
        </div>
    </a>

    <a class="center-container" href="{{ route('visas', ['#search-form-location']) }}">
        <img class="image" src="{{ asset('img/home/office magnifying glass.png') }}" alt="">
        <div class="overlay">
            <div class="text">Click to check Your documents</div>
        </div>
    </a>

    <a class="right-container" href="{{ route('contact') }}">
        <img class="image" src="{{ asset('img/home/contact.png') }}" alt="">
        <div class="overlay">
            <div class="text">Click to contact Us</div>
        </div>
    </a>
@endsection
