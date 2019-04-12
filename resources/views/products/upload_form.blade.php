@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



<form action="/upload" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    Product name: <br>
    <input name="name" type="text">
    <br><br>
    Product photos (can attach more than one): <br>
    <input multiple="multiple" name="photos[]" type="file">
    <br><br>
    <input type="submit" value="Upload">
</form>
    @endsection
