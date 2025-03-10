<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    public function create()
    {
        return view("projects.create");
    }

    public function store(Request $request)
    {
        $newProject = new Project();
        $newProject->project_name = $request->project_name;
        $newProject->client_name = $request->client_name;
        $newProject->project_description = $request->project_description;
        $newProject->save();
        return redirect()->route("projects.show", $newProject);
    }

    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("projects.index");
    }
}
