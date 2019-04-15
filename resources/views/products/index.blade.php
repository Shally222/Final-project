


@extends('layouts.app')


@section('content')

    <a href="{{route('products.create')}}">Add New Product</a>

    <div style="margin-top:30px;">

        @foreach($products as $product)

            <img src="{{url('storage/photos/'.$product->filename) }}" alt="{{$product->name}}" width="250" height="150">

            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-block btn-info">Edit</a>


            {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
            <button class="btn btn-block btn-danger" type="submit">Delete</button>
            {!! Form::close() !!}

            <br>


        @endforeach
    </div>


@endsection
