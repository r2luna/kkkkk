<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index',[
            'projects' => Project::query()
                ->withCount('proposals')
                ->latest('ends_at')
                ->orderBy('name')
                ->get()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
