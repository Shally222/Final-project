


@extends('layouts.app')


@section('content')

    <a href="{{route('products.create')}}">Add New Product</a>

    <div style="margin-top:30px;">

        @foreach($products as $product)

            <img src="{{url('storage/photos/'.$product->filename) }}"  width="250" height="150">


            <br>

        @endforeach
    </div>


@endsection
