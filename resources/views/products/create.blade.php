
@extends('layouts.app')

@section('content')

@section('title','Creat Product')

    <h1 class="title" >Upload Products Photo</h1>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="type">{{ __("Product Type")}}:</label>
            <select class="form-control" name="type">

                <option value="Necklace">Necklace</option>
                <option value="Bracelets">Bracelets</option>
                <option value="Accessories">Accessories</option>

            </select>
        </div>


        <div class="field">

            <lable class="lable" for="name"> Product name:</lable>

            <div class="control">
                <input type="text" name="name" value="{{old('name')}}">
            </div>
        </div>

        <div class="field">

            <lable class="lable" for="price"> Product price:</lable>

            <div class="control">
                <input type="double" name="price" value="{{old('price')}}">
            </div>
        </div>

        <div class="field">

            <lable class="lable" for="introduction">Product Introduction</lable>

            <div class="control">
                <textarea name="introduction" >{{ old('introduction')}}</textarea>
            </div>
        </div>

        <div class="field">

            <lable class="lable" for="photos[]"> Product photos (can attach more than one):</lable>

            <div class="control">
                <input  multiple="multiple" type="file" name="photos[]" value="{{old('photos[]')}}">
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Upload</button>
            </div>
        </div>


    </form>
@endsection

