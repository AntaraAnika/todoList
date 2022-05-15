
@extends('todos.layout')


@section('content')

    <div>
        <h1>All Your Todos</h1>
        <a href="{{ route('todo.create') }}" class="btn btn-success">Create New</a>
    </div>

        <ul class="list-group list-group-flush my-4">
            @foreach($todos as $todo)
            <li class="list-group-item">

                <p>{{$todo->title}}</p>

                <div>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('todo.destroy', $todo->id) }}" class="btn btn-primary">Delete</a>

                </div>

            </li>
            @endforeach
        </ul>

@endsection
