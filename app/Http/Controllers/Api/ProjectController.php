<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json([
            'success' => true,
            'response' => $projects
        ]);
    }

    public function show(String $id)
    {
        $project = Project::findOrFail($id);
        return response()->json([
            'success' => true,
            'response' => $project,
        ]);
    }
}
