<div class="links">

    @extends('layout')

    @section('title','Turquoise Kingdom')

    @section('content')

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <ul class="carousel-indicators">
                @foreach($sliders as $slider)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ul>


            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://localhost:8000/images/slide-1555328166.jpeg" alt="p1">
                </div>

                <div class="carousel-item">
                    <img src="http://localhost:8000/images/slide-1555328573.jpeg" alt="p2">
                </div>

                <div class="carousel-item">
                    <img src="http://localhost:8000/images/slide-1555328956.JPG" alt="p3">
                </div>

            </div>


            <!-- Controls -->
            <a class="carousel-control-prev" href="#carousel-example-generic" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    @endsection

</div>
