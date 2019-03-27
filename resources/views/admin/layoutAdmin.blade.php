<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Pacifico" rel="stylesheet">
    <!--styles-->
    <link href="{{ asset ('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
</head>

<body>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('welcome') }}">welcome</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
<nav>
    @include('includes.navbarAdmin')
</nav>
<div>
    @yield('content')
</div>
<hr>
<div class="container">
    <div class="row"><h2> @yield('soustitre')</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        @yield('form')
    </div>
</div>

<div class="container">
    <div class="row"><h2> @yield('soustitre2')</h2>
    </div>
</div>
<div class="container">
    <div class="row"><h2> @yield('content2')</h2>
    </div>
</div>


<footer>
    @include('includes.footer')
</footer>
</body>

</html>
