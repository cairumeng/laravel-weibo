@extends('layouts.default')


@section('content')
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
@stop