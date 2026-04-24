@extends('layouts.app')

@section('content')
<h1 class="mb-4">Task Manager</h1>

<!-- Create Task Form -->
<div class="card mb-4">
    <div class="card-header">
        <h5>Create New Task</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
</div>

<!-- Tasks List -->
<div class="card">
    <div class="card-header">
        <h5>All Tasks</h5>
    </div>
    <div class="card-body">
        @if($tasks->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description ?: 'N/A' }}</td>
                                <td>
                                    <span class="badge bg-{{ $task->status == 'completed' ? 'success' : 'warning' }}">
                                        {{ ucfirst($task->status) }}
                                    </span>
                                </td>
                                <td>{{ $task->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No tasks found. Create your first task above!</p>
        @endif
    </div>
</div>
@endsection