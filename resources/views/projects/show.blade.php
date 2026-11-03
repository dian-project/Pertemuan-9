
@extends('layouts.app')

@section('title', $project->nama . ' | Dian Project')

@section('content')
<section class="container py-5">

    {{-- Tombol kembali --}}
    <div class="mb-4">
        <a href="{{ route('projects.index') }}"
           class="btn btn-outline-primary">
            &larr; Kembali ke My Projects
        </a>
    </div>

    {{-- Detail proyek --}}
    <div class="row g-4 align-items-start">

        {{-- Gambar proyek --}}
        <div class="col-lg-6">
            @if ($project->gambar)
                <img
                    src="{{ asset('images/projects/' . $project->gambar) }}"
                    alt="{{ $project->nama }}"
                    class="img-fluid rounded shadow-sm w-100 project-detail-image"
                >
            @else
                <div class="project-detail-placeholder rounded shadow-sm">
                    <span>{{ $project->kategori }}</span>
                    <h2>{{ $project->nama }}</h2>
                </div>
            @endif
        </div>

        {{-- Informasi proyek --}}
        <div class="col-lg-6">

            <span class="badge bg-primary mb-3">
                {{ $project->kategori }}
            </span>

            <h1 class="display-6 fw-bold mb-3">
                {{ $project->nama }}
            </h1>

            <h5 class="mb-3">Tentang Project</h5>

            <p class="text-secondary" style="line-height: 1.8;">
                {{ $project->deskripsi }}
            </p>

            {{-- Link project jika tersedia --}}
            @if ($project->link)
                <a
                    href="{{ $project->link }}"
                    class="btn btn-primary mt-3"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Kunjungi Project
                </a>
            @endif

            {{-- Tombol kembali ke daftar --}}
            <a
                href="{{ route('projects.index') }}"
                class="btn btn-outline-secondary mt-3"
            >
                Lihat Project Lainnya
            </a>

        </div>
    </div>

</section>
@endsection
