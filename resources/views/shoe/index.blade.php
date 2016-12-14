@extends('layouts.master')

@section('content')
    @foreach($shoes as $shoe)
        <h2>{{ $shoe->company . $shoe->model }}</h2>
        <img src="{{ $shoe->image_url }}">
        <p>{{ $shoe->pivot->comments }}</p>
    @endforeach
@endsection
