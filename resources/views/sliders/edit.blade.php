
@extends('layouts.app')

@section('title','Edit Slider')
@section('content')
{{ Form::model($slider, array('route' => array('slides.update', $slider->id), 'method' => 'PUT', 'files' => true)) }}

{{Form::label('title', 'Title')}}
{{Form::text('title', null, array('class' => 'form-control'))}}
<br>

{{Form::label('photo', 'Photo')}}
{{Form::file('photo', array('class' => 'form-control'))}}

<br>
<img src="{{url('images')}}/{{$slider->photo}}" alt="image" width="500" height="400">

<br><br><br>

{{ Form::submit('Update Slide', array('class' => 'btn btn-success')) }}

{{Form::close()}}

@endsection

