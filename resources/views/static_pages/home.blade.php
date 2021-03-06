@extends('layouts.default')


@section('content')
@if(Auth::check())
<div class="row">
    <div class="col-md-8">
        <section class="status_form">
            @include('shared._status_form')
        </section>
        <h4>Blog List</h4>
        <hr>
        @include('shared._feed')
    </div>
    <aside class="col-md-4">
        <section class="user_info">
            @include('shared._user_info',['user'=>Auth::user()])
        </section>
    </aside>
</div>
@else
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        what you are reading right now is the home page of Laravel
    </p>
    <p>
        Everything begins from here
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up now</a>
    </p>
</div>
@endif
@stop