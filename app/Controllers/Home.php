<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // 1. Siapkan Data Artikel (Nanti ini diganti ambil dari Database)
        $data['articles'] = [
            [
                'judul' => '5 Cara Menjaga Kesehatan Gigi Anak',
                'tanggal' => '2 Feb 2026',
                'excerpt' => 'Menjaga kesehatan gigi susu sangat penting untuk pertumbuhan gigi permanen...',
                'gambar' => 'blog-1.jpg' // Pastikan file ini ada atau pakai placeholder
            ],
            [
                'judul' => 'Pentingnya Imunisasi Dasar Lengkap',
                'tanggal' => '25 Jan 2026',
                'excerpt' => 'Imunisasi adalah investasi kesehatan terbaik untuk melindungi buah hati dari penyakit...',
                'gambar' => 'blog-2.jpg'
            ],
            [
                'judul' => 'Jadwal Dokter Spesialis Baru',
                'tanggal' => '10 Jan 2026',
                'excerpt' => 'Kabar gembira! Klinik Hafida kini membuka layanan spesialis anak setiap hari Sabtu...',
                'gambar' => 'blog-3.jpg'
            ]
        ];

        // 2. Kirim data ke view landing_page
        return view('landing_page', $data);
    }
}