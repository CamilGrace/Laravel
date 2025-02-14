@extends('taskTemplate')

@section('content')
    <h2>Create Task</h2>

    @if(isset($id))
        <form method="POST" action="/tasks/{{ $id }}">
        @method('PUT')
    @else
        <form method="POST" action="/tasks">
    @endif

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $title ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Task</button>
        <a href="/tasks" class="btn btn-secondary">Cancel</a>
    </form>
@endsection