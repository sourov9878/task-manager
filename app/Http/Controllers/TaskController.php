<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show the form to create a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    // Mark a task as completed
    public function complete(Task $task)
    {
        $task->completed = true;
        $task->save();

        return redirect()->route('tasks.index');
    }
}
