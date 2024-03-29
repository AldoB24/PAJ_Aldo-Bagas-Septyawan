@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        <form method="POST" action="{{ url('/task/' . $tasks->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $tasks->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ $tasks->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection