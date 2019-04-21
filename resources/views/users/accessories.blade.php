<div class="links">

    @auth
    @extends('layout')
    <style>
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
    </style>

    @section('title','Accessories')

    @section('content')


        <div class="flex-container">

            @foreach($product as $object)

                <div style="width: 250px">

                    <a href="/users/{{ $object->product_id}}">

                        <img src="{{url('storage/photos/'.$object->filename) }}" alt="{{$object->product_id}}" width="250"
                             height="250">

                        Name: {{$object->name }}
                        <p></p>
                        Price: ¥{{$object->price}}

                    </a>
                </div>
            @endforeach

        </div>




    @endsection
@endauth

</div>
