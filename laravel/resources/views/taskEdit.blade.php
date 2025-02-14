@extends('taskTemplate')

@section('content')
    <h2>Edit Task</h2>

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $task->description }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="is_completed" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
            <label class="form-check-label" for="is_completed">Completed</label>
        </div>

        <button type="submit" class="btn btn-success">Update Task</button>
        <a href="/tasks" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
