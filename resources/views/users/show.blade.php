<div class="links">

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

               <h2 >{{ $object->name }}</h2>
               <h2>¥{{$object->price}}</h2>
               <h2>Introduction:</h2>
                {{$object->introduction}}

            </div>

            @endforeach



    @endsection


</div>
