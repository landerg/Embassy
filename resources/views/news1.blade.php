@extends('layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@stop

@section('content')
    <h1>Statement by President Joe Biden on Additional Security Assistance to Ukraine</h1>
    <div class="image">
        <img src="{{ asset('img/news/biden-750-1140x684.png') }}" alt="">
    </div>
    <h2>FOR IMMEDIATE RELEASE</h2>
    <h2>June 1, 2022</h2>
    <p> 
        The people of Ukraine continue to inspire the world with their courage and resolve as they fight bravely to
        defend their country and their democracy against Russian aggression. The United States will stand with
        our Ukrainian partners and continue to provide Ukraine with weapons and equipment to defend itself. 
    </p>
    <p>
        Today, I am announcing a significant new security assistance package to provide timely and critical aid 
        to the Ukrainian military. Thanks to the additional funding for Ukraine, passed with overwhelmingly 
        bipartisan support in the U.S. Congress, the United States will be able to keep providing Ukraine with 
        more of the weapons that they are using so effectively to repel Russian attacks. This new package will 
        arm them with new capabilities and advanced weaponry, including HIMARS with battlefield munitions, 
        to defend their territory from Russian advances. We will continue to lead the world in providing historic 
        assistance to support Ukraine’s fight for freedom.
    </p>

@endsection