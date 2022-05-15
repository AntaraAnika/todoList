@extends('todos.layout')


@section('content')

    <h1>Update the list</h1>

    <form method="post" action="{{ route('todo.update', $todo->id) }}">
        @csrf
        <div class="mb-3">

            <label for="exampleInputText" class="form-label">Add Content</label>
            <input class="py-2 px-2" type="text" name="title" value="{{ $todo->title }}" class="form-control" id="exampleInputText" aria-describedby="TextHelp"/>
            @error('title')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input class="btn btn-primary mb-3" type="submit" value="Update"/>
    </form>

    <a class="" href="{{ route('todo.index') }}">Go Back To list</a>

@endsection
