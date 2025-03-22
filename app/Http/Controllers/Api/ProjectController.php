<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Restituisce tutti i progetti con tecnologie associate
    public function index()
    {
        $projects = Project::with('technologies')->get();
        return response()->json($projects);
    }

    // Restituisce un singolo progetto con tecnologie associate
    public function show($id)
    {
        $project = Project::with('technologies')->find($id);

        if (!$project) {
            return response()->json(['message' => 'Progetto non trovato'], 404);
        }

        return response()->json($project);
    }
}
