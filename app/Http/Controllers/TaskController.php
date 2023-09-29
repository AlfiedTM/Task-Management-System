<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'dueDate' => ['required', 'after_or_equal:' . date('Y-m-d')],
        ], [
            'name.required' => 'The Title field is required.',
            'description.required' => 'Email field is a required field.',
        ]);
        $user = Auth::user();
        $validatedData['user_id'] = $user->id;
        $task = Task::create($validatedData);
        if ($task != null) {
            return back()->with('success', 'Task Created Successfully');
        } else {
            return back()->with('error', 'Error creating Task');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }

    /*
     * Manage Tasks
     * */
    public function taskManager(): View
    {
        $user = Auth::user();
        $tasks = $user->task()->get();
        $route = Route::currentRouteName();
        $headerName = null;
        if ($route=='task.edit') {
            $headerName = 'Edit';
        } else {
            $headerName = 'Delete';
        }
//        echo $route;
        return view('tasks.manage', compact('tasks', 'headerName'));
    }
}
