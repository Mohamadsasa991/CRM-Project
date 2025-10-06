<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use function Laravel\Prompts\alert;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $tasks = Task::all();
        return view('tasks.create',['tasks'=>$tasks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $task = $request->validate([
            'title'=>['required'],
            'desc'=>['max:355'],
            'deadline'=>['required','date'],
            'status'=>['required']
        ]);
        $task['user_id']=1;
        $task['client_id']=2;
        Task::create($task);
        return redirect('/tasks');
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
    public function edit(Task $task)
    {
        $users =User::all();
        return view('tasks.edit',['task'=>$task,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task,User $user)
    {
    $tasks = $request->validate([
            'title'=>['required'],
            'desc'=>['max:355'],
            'deadline'=>['required','date'],
            'status'=>['required']
        ]);
        // $projects['user_id']=1;
        // $projects['client_id']=2;

        $task->update($tasks);
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task  $task)
    {
        Gate::authorize('delete_tasks');
        $task->delete();
        return redirect('/tasks');
    }
}
