<!doctype html>
<html lang="{{ app()->getLocale() }}">
<html class=" js" lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Библиотека КГТУ</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{--<link href="css/bundle.css" rel="stylesheet">--}}
    <link href="{{ asset('css/bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.css') }}" rel="stylesheet">
    {{--<link href="css/buttons.css" rel="stylesheet" type="text/css">--}}
    {{--<script type="text/javascript" src="js/p.js"></script>--}}
    <script type="text/javascript" src="{{ asset('js/p.js') }}"></script>

</head>
<body>
<header>
    <p>
        <a href="http://kstu.com/">
            <span class="b-logo_me">Библиотека КГТУ</span> </a>
    </p>
    @if (Route::has('login'))

        <ul>
            @auth
                <li>
                    <a href="{{ url('/home') }}">Home</a>
                </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
        </ul>
    @endif
</header>

@yield('content')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>