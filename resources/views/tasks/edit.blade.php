<!-- resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Edit Task</h1>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to List</a>

        <!-- Display Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Form -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
