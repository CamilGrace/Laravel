<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('taskIndex', compact('tasks'));
    }

    public function create()
    {
        return view('taskCreate');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'is_completed' => false
        ]);

        return redirect('/tasks')->with('success', 'Task successfully created.');
    }

    public function edit(Task $task) 
    {
        return view('taskEdit', compact('task')); 
    }

    public function update(Request $request, Task $task) 
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'is_completed' => $request->has('is_completed'), 
        ]);

        return redirect('/tasks')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task) 
    {
        $task->delete();

        return redirect('/tasks')->with('success', 'Task deleted successfully.');
    }
}
