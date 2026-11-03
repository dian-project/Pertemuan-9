<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'nama' => 'Sistem Informasi Akademik',
                'slug' => 'sistem-informasi-akademik',
                'kategori' => 'Web Development',
                'deskripsi' => 'Pengembangan website sistem informasi akademik untuk membantu pengelolaan informasi mahasiswa, data akademik, dan aktivitas administrasi pendidikan melalui sistem yang terstruktur.',
                'gambar' => 'siakad.png',
                'link' => null,
            ],
            [
                'nama' => 'Database Sistem Informasi Akademik',
                'slug' => 'database-siakad',
                'kategori' => 'Database Management',
                'deskripsi' => 'Perancangan database sistem informasi akademik menggunakan MySQL melalui phpMyAdmin, meliputi pembuatan tabel, penentuan field, dan pengelolaan struktur data.',
                'gambar' => 'database-siakad.png',
                'link' => null,
            ],
            [
                'nama' => 'FurniSpace Company Profile',
                'slug' => 'furnispace',
                'kategori' => 'Web Development',
                'deskripsi' => 'Website bertema furnitur dengan tampilan modern untuk memperkenalkan produk, menampilkan katalog, serta memberikan informasi kepada calon pelanggan. Website dilengkapi fitur pencarian, filter kategori, dan halaman detail produk.',
                'gambar' => 'furnispace.png',
                'link' => null,
            ],
            [
                'nama' => 'KOMIDA Company Profile',
                'slug' => 'komida-company-profile',
                'kategori' => 'Web Development',
                'deskripsi' => 'Website profil Koperasi Mitra Dhuafa (KOMIDA) untuk menyajikan informasi profil, visi dan misi, program pemberdayaan, serta kontak perusahaan secara terstruktur.',
                'gambar' => 'komida.jpg',
                'link' => null,
            ],
            [
                'nama' => 'Dian Store - Laptop Store UI/UX',
                'slug' => 'dian-store-ui-ux',
                'kategori' => 'UI/UX Design',
                'deskripsi' => 'Perancangan antarmuka website toko laptop dengan fokus pada pengalaman pengguna, tampilan katalog produk, informasi spesifikasi, dan navigasi yang mudah dipahami.',
                'gambar' => 'dian-store.jpg',
                'link' => null,
            ],
            [
                'nama' => 'Burgeria - Food Ordering App UI/UX',
                'slug' => 'burgeria-ui-ux',
                'kategori' => 'UI/UX Design',
                'deskripsi' => 'Perancangan konsep antarmuka aplikasi pemesanan burger yang mencakup tampilan menu makanan, detail produk, keranjang belanja, dan alur pemesanan yang praktis.',
                'gambar' => 'burgeria.jpg',
                'link' => null,
            ],
            [
                'nama' => 'DIGITEC Brand Identity & Promotional Design',
                'slug' => 'digitec-visual-identity',
                'kategori' => 'Graphic Design',
                'deskripsi' => 'Perancangan identitas visual DIGITEC sebagai penyedia layanan desain dan solusi digital bagi UMKM, meliputi konsep logo, pemilihan warna, tipografi, dan poster promosi.',
                'gambar' => 'digitec.jpg',
                'link' => null,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
