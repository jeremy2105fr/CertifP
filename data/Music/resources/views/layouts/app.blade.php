<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music Store @yield('secondTitle')</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
    <a href="{{ url('/') }}"><h1>Music Store</h1></a>
        <ul class="navbar barMidle">
            @guest
                @else
        <li><a href="{{ url('/addMusic') }}">Ajouter une musique</li>
                    <li><a href="#">Test</li>
            @endguest
        </ul>
        <ul class="navbar">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li><a class="pseudoUser" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
            @endguest
        </ul>
    </nav>
    <main class="content">
            <h2>@yield('content')</h2>
            <div>@yield('table')</div>
            <div>@yield('form')</div>
    </main>
    <footer></footer>
</body>
</html>
