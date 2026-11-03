<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik project
        $totalProject = Project::count();

        $totalKategori = Project::distinct('kategori')
            ->count('kategori');

        $totalAktif = Project::where('status', 'Aktif')
            ->count();

        $totalNonaktif = Project::where('status', 'Nonaktif')
            ->count();

        // Daftar seluruh project
        $projects = Project::latest()->get();

        return view('admin.dashboard', compact(
            'totalProject',
            'totalKategori',
            'totalAktif',
            'totalNonaktif',
            'projects'
        ));
    }
}