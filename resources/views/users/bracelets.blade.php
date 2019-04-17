<div class="links">

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

    @section('title','Bracelets products')

    @section('content')


        <div class="flex-container">

            @foreach($product as $key => $value)

                <div style="width: 250px">
                    <img src="{{url('storage/photos/'.$value->filename) }}" alt="{{$value->name}}" width="250"
                         height="250">
                    Name: {!! $value->name !!}
                    <p></p>
                    Price: £{!! $value->price !!}


                </div>
            @endforeach


        </div>




    @endsection


</div>
