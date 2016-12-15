@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>New Shoe</h3>
        </div>
        <div class="panel-body">
            Choose a shoe from the community collection or add a new one.
            <form method="post" action="/shoes">
                {{ csrf_field() }}
                <div class="form-group">
                    <select class="form-control" name="existingShoeId">
                        <option>-Select-</option>
                        @foreach($shoes as $shoe)
                            <option value="{{ $shoe->id }}">
                                {{ $shoe->company }} {{ $shoe->model }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="f_company">Company</label>
                    <input class="form-control" type="text" id="f_company" name="company">
                    <div class="error">{{ $errors->first('company') }}</div>
                </div>
                <div class="form-group">
                    <label for="f_model">Model</label>
                    <input class="form-control" type="text" id="f_model" name="model">
                    <div class="error">{{ $errors->first('model') }}</div>
                </div>
                <div class="form-group">
                    <label for="f_image_url">Image URL</label>
                    <input class="form-control" type="text" id="f_image_url" name="image_url">
                    <div class="error">{{ $errors->first('image_url') }}</div>
                </div>
                <div class="form-group">
                    <label for="f_miles">Miles Run</label>
                    <input class="form-control" type="text" name="miles">
                    <div class="error">{{ $errors->first('miles') }}</div>
                </div>
                <div class="form-group">
                    <label for="f_comments">Comments</label>
                    <textarea class="form-control" id="f_comments" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
