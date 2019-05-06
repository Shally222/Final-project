
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Hi there, regular user
                        <p></p>
                        <p>{{ __("My name:")}} {{Auth::user()->name}}</p>
                        <p>{{ __("My Email:")}} {{Auth::user()->email}}</p>

                        {{ __("Please select your menu as follows:")}}

                        <ul>

                            <li><a href="/">{{ __("Official Website")}}</a></li>
                            <li><a href="/shops">{{ __("View our shops")}}</a></li>
                            <li><a href="/users/accessories">{{ __("View Accessories")}}</a></li>
                            <li><a href="/users/bracelets">{{ __("View Bracelets")}}</a></li>
                            <li><a href="/users/necklace">{{ __("View Necklace")}}</a></li>
                            <li><a href="{{ url('users/'.Auth::user()->id.'/edit_avatar') }}">{{ __("Upload your avatar")}}</a></li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
