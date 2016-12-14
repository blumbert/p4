@extends('layouts.master')

@section('content')
    @foreach($shoes as $shoe)
        <div class="well">
            <h2>{{ $shoe->company . $shoe->model }}</h2>
            <img src="{{ $shoe->pivot->image_url }}">
            <p><b>Miles Run:</b> {{ $shoe->pivot->miles }}</p>
            <p>{{ $shoe->pivot->comments }}</p>
            <form class="hidden-form" id="delete_form_{{ $shoe->id }}" method="post" action="/shoes/{{ $shoe->id }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-remove"></span> Remove</button>
            </form>
            <a class="btn btn-default" href="/shoes/{{ $shoe->id }}/edit"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        </div>
    @endforeach
@endsection
