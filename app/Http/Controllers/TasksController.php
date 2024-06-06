<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $record = Task::findOrFail($id)
        //
        return view('tasks.taskList', [
            'tasks' => Task::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'taskName'=>'required',
        ],
        [
            'taskName.required' => 'Task title cannot be empty!',
        ]);

        $task = new Task();

        $task->taskName = $request->input('taskName');

        $task->save();

        return redirect()->route('tasks.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tasks.edit', [
            'task' => Task::find($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $record = Task::find($id);

        $record->taskName = $request->input('taskName');
        $record->is_completed = $request->input('taskProgress');
        
        $record->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tasks = Task::find($id);

        $tasks -> delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
