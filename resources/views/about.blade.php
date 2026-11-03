
@extends('layouts.app')

@section('title', 'Tentang Saya | Dian Project')

@section('content')
<section class="container py-5">

    {{-- Judul halaman --}}
    <div class="text-center mb-4">
        <h1 class="display-6 fw-bold">Tentang Saya</h1>
        <p class="text-secondary mt-3">
            Mengenal saya lebih dekat dan perjalanan saya di dunia digital.
        </p>
    </div>

    {{-- Profil utama --}}
    <div class="about-profile text-center">

        {{-- Foto profil --}}
        <img
            src="{{ asset('images/foto-profil.png') }}"
            alt="Foto Muhamad Dian Tarmizi"
            class="profile-photo"
        >

        {{-- Informasi diri --}}
        <h2 class="h3 fw-bold mt-4">
            Muhamad Dian Tarmizi
        </h2>

        <div class="text-secondary mb-4">
            Mahasiswa S1 Sistem Informasi
        
        <p class="text-secondary mb-0">
            NIM : 251011700135 </p>
        <p class="text-secondary mb-0">
            Kelas : 03SIFE002 </p>
        </div>

        <div class="about-information mx-auto">

            <div class="about-item">
                <h3>Minat</h3>
                <p>Web Development dan Desain Grafis</p>
            </div>

            <div class="about-item">
                <h3>Tujuan</h3>
                <p>
                    Terus mengembangkan kemampuan teknologi dan menghasilkan
                    karya digital yang bermanfaat bagi banyak orang.
                </p>
            </div>

        </div>

    </div>

</section>
@endsection
