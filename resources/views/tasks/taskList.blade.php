@extends('layout')

@section('title', 'Homepage')

@section('content')

<div class="container">
    <form method="post" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter the Task">
            @error('taskName')
            <div class="form-error">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-color" type="submit">ADD TASK</button>
        </div>
    </form>

    <hr/>

    <div>
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    @if(count($tasks) > 0)
        <table class="table custom-table">
            <tr>
                <th >NO.</th>
                <th>TASK</th>
                <th>PROGRESS</th>
                <th>ACTION</th>
            </tr>
            @php 
                $counter = 1;
            @endphp

            @foreach($tasks as $task)

            <tr>
                <td scope="row">{{ $counter++ }}</td>
                <td>{{ $task['taskName'] }}</td>
                <td>
                    @if($task['is_completed'] === 0)
                        In progress
                    @else
                        completed
                    @endif</td>
                <td>
                    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                    <!-- <a href="{{ route('tasks.destroy', ['task' => $task->id]) }}"><button type="button" class="btn btn-outline-danger">Delete</button></a> -->
                    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>     
            </tr>
            @endforeach
        </table>
    @else 
        <h3 class="no-task-text">THERE ARE NO TASK TO DISPLAY!</h3>
    @endif
    </div>
</div>
@endsection