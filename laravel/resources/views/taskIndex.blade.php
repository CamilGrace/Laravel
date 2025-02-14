@extends('taskTemplate')

@section('content')
    <h2>Task List</h2>
    <a href="/tasks/create" class="btn btn-primary mb-3">Create Task</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->is_completed ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/tasks/{{ $task->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
