<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="zaza-logo">
            <a class="" href="#">ZAZA</a>
        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        </ul>
        <span class="call-to-action">
            <a href="#">Bestel snel!</a>
        </span>
    </div>
    </nav>

    <!-- content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <section class="text-center bg-zaza">
        <div class="container py-3">
            <h2><strong>ZAZA</strong></h2>
            <p class="mt-10">Straatnaam 1337 Rotterdam</p>
            <p class="mt-10">+316 12345678</p>
            <p class="mt-10">KvK: 123 123 123</p>
        </div>
    </section>
</body>
</html>
