@extends('layout')

@section('title', 'Edit')

@section('content')
    <body>
        <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div class="edit-form-style">
            <div class="mb-3">
                <label for="taskName" class="form-label">Email address</label>
                <input type="text" class="form-control" id="taskName" name="taskName" value="{{ $task->taskName }}">
                
            </div>
        
            <select class="form-select" aria-label="Default select example" name="taskProgress" id="taskProgress">
                <option value="0" {{ $task['is_completed'] === 0 ? 'selected' : '' }}>
                    In progress
                </option>
                <option value="1" {{ $task['is_completed'] === 1 ? 'selected' : '' }}>
                    Completed
                </option>
            </select>


            <div class="edit-btn">
                <button type="submit" class="btn btn-outline-info">UPDATE</button>
            </div>
        </div>
        </form>
    </body>
@endsection