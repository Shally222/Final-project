@auth
@extends('layouts.app')

@section('title','Edit products')

@section('content')

    <h1 class="title">Edit Product</h1>

    <form method="POST" action="/products/{{ $product->id}}" style="margin-bottom: 1em;">
        @method('PATCH')

        @csrf

        <div class="field">

            <lable class="lable" for="price">Price</lable>

            <div class="control">
                <input type="double" class="input" name="price" placeholder="Price" value="{{$product->price}}">

            </div>
        </div>


        <div class="field">

            <lable class="lable" for="introduction">Introduction</lable>

            <div class="control">
                <textarea name="introduction" class="textarea">{{ $product->introduction }}</textarea>
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Update Product</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/products/{{ $product->id}} ">
        @method('DELETE')

        @csrf
        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Delete Product</button>
            </div>
        </div>


    </form>

@endsection
@endauth
