
@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Hi boss!

                        {{ __("Please select your menu as follows:")}}

                        <ul>

                            <li><a href="/products">{{ __("Browse products")}}</a></li>
                            <li><a href="/products/create">{{ __("Create a new product")}}</a></li>
                            <li><a href="/slides">{{ __("Browse sliders")}}</a></li>
                            <li><a href="/slides/create">{{ __("Create a new slider")}}</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
