<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();

        $data = [
            'projects' => $projects,
            'status' => 200,
        ];

        return response()->json($data, 200);
    }

    public function store(StoreProjectRequest $request) {
        $validated = $request->validated();
        
        $project = Project::create([
        'id' => $validated['id'],
        'name' => $validated['name'],
        'description' => $validated['description'],
        'status' => $validated['status']

        ]);

        return response()->json($project, 201);
    }

    public function show($id) {
        $project = Project::find($id);

        if (!$project) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $data = [
            'project' => $project,
            'status' => 200
        ];
    }
}
