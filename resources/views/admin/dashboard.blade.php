
@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard Admin</h2>
            <p class="text-muted mb-0">Selamat datang di Dashboard Dian Project.</p>
        </div>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
            Kelola Project
        </a>
    </div>

    {{-- Statistik --}}
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-muted mb-2">Total Project</p>
                    <h2 class="fw-bold">{{ $totalProject }}</h2>
                    <small class="text-muted">Seluruh project</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-muted mb-2">Total Kategori</p>
                    <h2 class="fw-bold">{{ $totalKategori }}</h2>
                    <small class="text-muted">Kategori berbeda</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-muted mb-2">Project Aktif</p>
                    <h2 class="fw-bold text-success">{{ $totalAktif }}</h2>
                    <small class="text-muted">Status aktif</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-muted mb-2">Project Nonaktif</p>
                    <h2 class="fw-bold text-danger">{{ $totalNonaktif }}</h2>
                    <small class="text-muted">Status nonaktif</small>
                </div>
            </div>
        </div>

    </div>

    {{-- Tabel Project --}}
    <div class="card shadow-sm border-0">

        <div class="card-header bg-white py-3">
            <h5 class="fw-bold mb-0">Seluruh Data Project</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Project</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->nama }}</td>
                                <td>{{ $project->kategori }}</td>
                                <td>
                                    @if ($project->status == 'Aktif')
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>{{ $project->created_at->format('d-m-Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    Belum ada data project.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="text-muted small">
                Menampilkan {{ $projects->count() }} project.
            </div>

        </div>
    </div>

</div>

@endsection
