@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Shoenotes</h1>
        <p>A simple digital notebook for keeping track of running shoe performance.</p>
        @if(Auth::guest())
            <p>
                <a class="btn btn-primary btn-lg" href="/register" role="button">Sign Up</a>
            </p>
        @endif
    </div>
@endsection
