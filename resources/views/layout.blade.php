<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Turquoise Kingdom')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>

        .carousel-inner img {
            width: 1450px;
            height: 800px;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 20vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 54px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .div1 {
            width: 200px;
            height: 100px;
            position: absolute;
            top: 50px;
            left: 50px;
            border-style: dashed;
            border-width: 1px;
            border-color: gray;
        }

        .div2 {
            width: 100px;
            height: 30px;
            background: gray;
            position: relative;
            top: -10px;
            left: -10px;
            line-height: 30px;
            font-size: 16px;
            color: #FFFFFF;
            text-align: center;
            font-weight: bold;
        }


    </style>
</head>

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="div1">

        <div class="div2">
            Contact us
        </div>
        Address: Shenzhen, China
        Telephone: 0755-84603849
    </div>

    <div class="content">
        <div class="title m-b-md">
            The Turquoise Kingdom
        </div>

        <div class="links">
            <a href="{{ url('/home') }}">Home</a>
            <a href="/shops">Our shops</a>
            <a href="/users">Products</a>
            <a href="/users/necklace">Necklace</a>
            <a href="/users/bracelets">Bracelets</a>
            <a href="/users/accessories">Turquoise Accessories</a>

        </div>
    </div>
</div>

<div class="container">

    @yield('content')

</div>

</body>

</html>
