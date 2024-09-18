<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::query()
                ->withCount('proposals')
                ->latest('ends_at')
                ->orderByDesc('hours')
                ->get(),
        ]);
    }

    public function show(Project $project)
    {
        $project->loadCount('proposals');

        return view('projects.show', [
            'project' => $project,
            'proposals' => $project->proposals()->with('user')->orderBy('hours')->get(),
        ]);
    }
}
