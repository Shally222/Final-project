<div class="links">

    @extends('layout')


    @section('content')
        @foreach ($product as $object)

            {{ $object->name }}
            {{$object->price}}
            {{$object->introduction}}

        @endforeach

        @foreach ($photo as $object)

            <img src="{{url('storage/photos/'.$object->filename) }}" alt="{{$object->product_id}}" width="250"
                 height="250">

        @endforeach




    @endsection


</div>
