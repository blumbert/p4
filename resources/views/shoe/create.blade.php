@extends('layouts.master')

@section('content')
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
        </div>
        <div class="form-group">
            <label for="f_model">Model</label>
            <input class="form-control" type="text" id="f_model" name="model">
        </div>
        <div class="form-group">
            <label for="f_image_url">Image URL</label>
            <input class="form-control" type="text" id="f_image_url" name="image_url">
        </div>
        <div class="form-group">
            <label for="f_heel_toe_drop">Heel-toe Drop</label>
            <input class="form-control" type="text" id="f_heel_toe_drop" name="heel_toe_drop">
        </div>
        <div class="form-group">
            <label for="f_miles">Miles Run</label>
            <input class="form-control" type="number" name="miles">
        </div>
        <div class="form-group">
            <label for="f_comments">Comments</label>
            <textarea class="form-control" id="f_comments" name="comments"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
