


@extends('layouts.app')


@section('content')



    <a href="{{route('slides.create')}}">Add New Slide</a>


    <div style="margin-top:30px;">

        @foreach($sliders as $slider)

            <img src="{{url('images')}}/{{$slider->photo}}" alt="{{$slider->title}}" width="250" height="150">

            <a href="{{ route('slides.edit', $slider->id) }}" class="btn btn-block btn-info">Edit</a>


            {!! Form::open(['method' => 'DELETE', 'route' => ['slides.destroy', $slider->id] ]) !!}
            <button class="btn btn-block btn-danger" type="submit">Delete</button>
            {!! Form::close() !!}

            <br>

        @endforeach
    </div>


@endsection

