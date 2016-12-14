@extends('layouts.master')

@section('content')
    <h2>{{ $shoe->company . ' ' . $shoe->model }}</h2>
    <form method="post" action="/shoes/{{ $shoe->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="f_image_url">Image URL</label>
            <input class="form-control" type="text" id="f_image_url" name="image_url" value="{{ old('image_url', $shoe->pivot->image_url) }}">
        </div>
        <div class="form-group">
            <label for="f_miles">Miles Run</label>
            <input class="form-control" type="number" name="miles" value="{{ old('miles', $shoe->pivot->miles) }}">
        </div>
        <div class="form-group">
            <label for="f_comments">Comments</label>
            <textarea class="form-control" id="f_comments" name="comments">{{ old('comments', $shoe->pivot->comments)}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
