
@extends('layouts.app')

@section('title', 'Home - Dian Project')

@section('content')
<section class="container text-center py-5">
    <h1 class="display-5 fw-normal mb-4">
        Halo, Saya Muhamad Dian Tarmizi
    </h1>

    <img src="{{ asset('images/foto-profil.png') }}"
     alt="Foto profil Dian"
     class="rounded-circle shadow-sm mb-4"
     width="200"
     height="250"
     style="object-fit: cover;"
     >

    <h2 class="h4 fw-normal text-secondary mb-4">
        Mahasiswa Sistem Informasi | Web Developer
    </h2>

    <hr class="my-4">

    <p class="lead">
        Selamat datang di portfolio saya. Saya tertarik
        pada pengembangan website, desain grafis,
        dan teknologi digital.
    </p>

    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg mt-3">
    Lihat Semua Project
   </a>
</section>

<section class="container py-4">
    <h2 class="text-center mb-4">Keahlian Saya</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">Web Development</h3>
                    <p class="card-text">
                        Pengembangan website menggunakan PHP dan Laravel.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">UI/UX Design</h3>
                    <p class="card-text">
                        Membuat tampilan website yang menarik dan mudah digunakan.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="h5">Desain Grafis</h3>
                    <p class="card-text">
                        Membuat desain visual untuk kebutuhan digital.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
