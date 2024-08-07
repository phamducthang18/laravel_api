<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource as TaskResouer;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaskResouer::collection(auth()->user()->tasks()->get());
    }

  

    public function store(StoreTaskRequest $request)
    {
        $task = $request->user()->create($request->validated());

        return  TaskResouer::make($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return  TaskResouer::make($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return  TaskResouer::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
