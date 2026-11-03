
@extends('layouts.app')

@section('title', 'My Projects - Dian Project')

@section('content')
<section class="container py-5 projects-section">

    <div class="text-center mb-5">
        <h1 class="display-6 fw-normal">My Projects</h1>
    </div>

    <div class="row g-4">
        @forelse ($projects as $project)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 project-card">

                    @if ($project->gambar)
                        <img
                            src="{{ asset('images/projects/' . $project->gambar) }}"
                            class="card-img-top project-image"
                            alt="{{ $project->nama }}"
                        >
                    @else
                        <div class="project-placeholder">
                            <span>{{ $project->kategori }}</span>
                            <h5>{{ $project->nama }}</h5>
                        </div>
                    @endif

                    <div class="card-body d-flex flex-column">
                        <h2 class="project-title">
                            {{ $project->nama }}
                        </h2>

                        <p class="project-description">
                            {{ \Illuminate\Support\Str::limit($project->deskripsi, 65) }}
                        </p>

                        <p class="project-tech">
                            Kategori: {{ $project->kategori }}
                        </p>

                        <div class="mt-auto">
                            <a
                                href="{{ route('projects.show', $project->slug) }}"
                                class="btn btn-primary w-100 detail-button"
                            >
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-secondary">
                    Belum ada project yang ditampilkan.
                </p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
@if ($projects->hasPages())
    <div class="projects-pagination mt-5">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endif

</section>
@endsection
