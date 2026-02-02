<?php

namespace App\Controllers;

class Layanan extends BaseController
{
    public function detail($slug = null)
    {
        // 1. DATA PURA-PURA (Nanti ini diganti query Database: SELECT * FROM layanan WHERE slug = $slug)
        $semua_layanan = [
            'poli-umum' => [
                'judul' => 'Poli Umum',
                'deskripsi' => 'Poli Umum Klinik Hafida melayani pemeriksaan kesehatan dasar, pengobatan penyakit ringan hingga kronis, serta konsultasi kesehatan keluarga.',
                'fasilitas' => ['Ruang Periksa Nyaman', 'Alat Tensi Digital', 'Nebulizer', 'EKG Dasar'],
                'dokter' => 'dr. Budi Santoso',
                'jam' => '08.00 - 21.00 WIB'
            ],
            'poli-gigi' => [
                'judul' => 'Poli Gigi',
                'deskripsi' => 'Layanan kesehatan gigi dan mulut yang komprehensif, mulai dari pembersihan karang gigi (scaling), tambal gigi, hingga pencabutan.',
                'fasilitas' => ['Dental Unit Modern', 'Sterilisator Alat', 'Rontgen Gigi'],
                'dokter' => 'drg. Siti Aminah',
                'jam' => '09.00 - 17.00 WIB'
            ],
            'kia' => [
                'judul' => 'KIA & KB',
                'deskripsi' => 'Kesehatan Ibu dan Anak adalah prioritas kami. Melayani pemeriksaan kehamilan (ANC), imunisasi bayi, dan pelayanan KB.',
                'fasilitas' => ['USG 2D/4D', 'Ruang Laktasi', 'Timbangan Bayi Digital'],
                'dokter' => 'Bidan Senior',
                'jam' => '08.00 - 15.00 WIB'
            ]
        ];

        // 2. Cek apakah layanan yang diklik ada datanya?
        if (!isset($semua_layanan[$slug])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Layanan tidak ditemukan");
        }

        $data = [
            'title' => $semua_layanan[$slug]['judul'] . ' - Klinik Hafida',
            'layanan' => $semua_layanan[$slug]
        ];

        return view('detail_layanan', $data);
    }
}