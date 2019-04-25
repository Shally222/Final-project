<div class="links">

    @auth
    @extends('layout')


    @section('content')

        <style>
            img {
                float: left;
            }

            .flex-container {
                display: flex;
                flex-wrap: wrap;
                background-color: -moz-mac-accentdarkshadow;
            }

            .flex-container > div {
                background-color: #f1f1f1;
                width: 100px;
                margin: 10px;
                text-align: center;
                line-height: 75px;
                font-size: 30px;
            }

            .right {
                float: right;
                width: 100%;
                border: 3px solid gray;
                padding: 0px;
            }
        </style>

        <div class="flex-container">

        @foreach ($photo as $object)

            <div style="width: 250px">

            <img src="{{url('storage/photos/'.$object->filename) }}" alt="{{$object->id}}" width="250"
                 height="250">

            </div>

        @endforeach
        </div>

    <p></p>
        <div class="right">
            @foreach ($product as $object)

              Name: <h2 >{{ $object->name }}</h2>
                Price:<h2>£{{$object->price}}</h2>
               Introduction:
                <h3>{{$object->introduction}}</h3>
                <h3><a href="https://shop113555673.world.taobao.com/">Shop online</a></h3>
                <h3><a href="/shops">Shop at store</a></h3>

            </div>

            @endforeach



    @endsection

@endauth
</div>
