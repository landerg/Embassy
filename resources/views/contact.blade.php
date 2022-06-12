@extends('layout.index')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/content-contact.css') }}">
@stop

@section('content')
    <div class="map">
        <h1>Find Us</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40642.64658202241!2d30.405519521863823!3d50.45664440628612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc4bafa2a56d%3A0x7400177862d9fa46!2sU.S.%20Embassy%20in%20Ukraine!5e0!3m2!1sen!2sua!4v1654688016758!5m2!1sen!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>


    <form action="{{ route('contact')}}" method="POST">
    @csrf
        <div class="contact_form">
            <h1>Contact Us</h1>
            <label for="user_name">Your name: </label>
            <input type="text" id="user_name" name="user_name" placeholder="Your Name...">
            <br><br>
            
            <label for="user_email">Your email: </label>
            <input type="email" name="user_email" id="user_email" placeholder="Your Email..." multiple>
            <br><br>
            
            <label for="description">Problem description: </label>
            <textarea class="description" name="description" id="description" cols="30" rows="10" placeholder="Problem Description..."></textarea>
            <br><br>
            <button class="contact-button" type="submit" name="contact_button">Submit</button>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div id="error"></div>
                <script>
                    document.getElementById('error').scrollIntoView();
                </script>
            </div>
            @endif
        </div>
    </form>
@endsection