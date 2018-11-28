<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <title>Festival: STRAND</title>
</head>
<body>

    <div class="responsive-bar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </div>
    <nav>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>
        @if(Auth::check())
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="{{ route ('contact.form') }}">Contact</a></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
        @else
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="{{ route ('contact.form') }}">Contact</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
        @endif
    </nav>

    <div class="container">
<!--        <header>-->
<!--            <h1>Mediacollege Amsterdam</h1>-->
<!--            @section('header')-->
<!--            @show-->
<!--        </header>-->
<!---->
        <main>
            @yield('content')
        </main>
        <footer>
            Footer
        </footer>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{ asset('scripts/navbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/scrollAnimation.js') }}"></script>

</body>
</html>
