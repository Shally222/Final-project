@extends('layouts.app')
@section('title')
    Basic Information
@stop
@section('content')
    <section class="section" >
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <div class="card">

                        </nav>
                    </div>
                </div>
            </div>
            <div class="column is-9">
                <div class="card">
                    <div class="card-content">
                        <h2 class="title is-4"><span class="icon"><i class="fa fa-picture-o"></i></span> Please choose pictures</h2>
                        <hr>
                        @if(\Illuminate\Support\Facades\Session::has('mes'))
                            <p class="field">
                           <span class="has-text-danger">
                               {{\Illuminate\Support\Facades\Session::get('mes')}}
                           </span>
                            </p>
                        @endif
                        <form action="{{route('users.update_avatar',$user->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="columns">
                                <div class="column is-3">
                                    <div class="">
                                        <strong>Please choose pictures：</strong>
                                        <figure   class="image is-1by1"><img style="width:180px;height:200px" src="{{asset($user->avatar)}}"></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column is-3">
                                    <div class="file is-boxed">
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="avatar">
                                            <span class="file-cta">
                                          <span class="file-icon">
                                            <i class="fa fa-upload"></i>
                                          </span>
                                          <span class="file-label">
                                            Choose one picture
                                          </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column is-3">
                                    <button class="button is-link" type="submit">
                                        <span>Upload picture</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@stop
