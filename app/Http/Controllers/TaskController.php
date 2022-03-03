<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Artisan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Task
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return bool
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return bool
     */
    public function destroy(Task $task)
    {
        return $task->delete();
    }

    public function resetAllTasks()
    {
        Artisan::call('migrate:fresh --seed');
        return redirect()->route('home')->with('info','Tasks are deleted and dummy ones are added :)');
    }
}
