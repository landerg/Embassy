<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="icon" type="image/x-icon" href="/img/logo/ukraine.png">
    @yield('styles')
    @stack('styles')
</head>
<body>

<header class="header">
    <a href="/" class="logo"><img src="img/logo/ukraine.png" width="50px" height="50px" alt=""></a>
    <div class="header-right">
        <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
        <a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
        <a href="{{ route('visas') }}" class="{{ (request()->is('visas')) ? 'active' : 'mian-active' }}">Visas</a>
        <a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a>
    </div>
</header>

<main class="content">
    @yield('content')
</main>

<footer class="footer">
    <div>
        <h3>Made by Nazarii Palamarchuck</h3>
        <p>Веб-орієнтована інформаційна система видачі дозвільних документів посольством країни</p>

        <div class="footer-list">
            <a class="link-one" target="_blank" href="">Repositories</a>
            <a class="link-two" target="_blank" href="https://ua.usembassy.gov/">usembassy.gov</a>
            <a class="link-three" target="_blank" href="https://usa.mfa.gov.ua/en">mfa.gov</a>
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
@yield('scripts')
</body>
</html>
