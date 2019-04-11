<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
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

            .div1{
                width:200px;
                height:100px;
                position:absolute;
                top:50px;
                left:50px;
                border-style:dashed;
                border-width:1px;
                border-color:gray;
            }
            .div2{
                width:100px;
                height:30px;
                background:gray;
                position:relative;
                top:-10px;
                left:-10px;
                line-height:30px;
                font-size:16px;
                color:#FFFFFF;
                text-align:center;
                font-weight:bold;
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
                    <a href="https://laravel.com/docs">Home</a>
                    <a href="https://laracasts.com">Necklace</a>
                    <a href="https://laravel-news.com">Bracelet</a>
                    <a href="https://blog.laravel.com">Ring</a>
                    <a href="https://nova.laravel.com">Earring</a>
                    <a href="https://forge.laravel.com">Turquoise Accessories</a>

                </div>
            </div>
        </div>

        <div class="group-home-slideshow">
            <div class="home-slideshow-inner col-sm-12">
                <div class="home-slideshow">
                    <div id="home_main-slider" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($sliders as $photo)
                                <li data-target="#home_main-slider" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                                <div class="item image {{ $loop->first ? ' active' : '' }}">
                                    <img src="{{url('images')}}/{{$slider->photo}}" alt="slider" title="Image Slideshow">
                                    <div class="slideshow-caption position-right">
                                        <div class="slide-caption">
                                            <div class="group-caption">
                                                <div class="content">
                                                    @if(!empty($slider->title))
                                                        <span class="title">
                      {{$slider->title}}
                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        @endforeach
                        </div>
                        <a class="left carousel-control" href="#home_main-slider" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#home_main-slider" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
