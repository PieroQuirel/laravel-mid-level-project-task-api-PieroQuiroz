<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();

        $data = [
            'tasks' => $tasks,
            'status' => 200,
        ];

        return response()->json($data, 200);
    }

    public function store(StoreTaskRequest $request) {
        $validated = $request->validated();
        
        $task = Task::create([
        'id' => $validated['id'],
        'id_project' => $validated['id_project'],
        'title' => $validated['title'],
        'description' => $validated['description'],
        'status' => $validated['status'],
        'priority' => $validated['priority'],
        'due_date' => $validated['due_date']

        ]);

        return response()->json($task, 201);
    }
}
