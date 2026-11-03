<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    // Menampilkan daftar project, 3 project per halaman
    public function index()
    {
        $projects = Project::orderBy('id', 'asc')->paginate(3);

        return view('projects.index', compact('projects'));
    }

    // Menampilkan detail project berdasarkan slug
    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('projects.show', compact('project'));
    }
}
