<?php

namespace App\Controllers;

use App\Models\PoliModel;
use App\Models\DokterModel;

class Home extends BaseController
{
    public function index()
    {
        // 1. Panggil Model
        $poliModel = new PoliModel();
        $dokterModel = new DokterModel();

        // 2. Ambil Data dari Database
        $data['layanan_kami'] = $poliModel->findAll(); // Mengambil semua data poli
        $data['para_dokter'] = $dokterModel->findAll(); // Mengambil semua data dokter

        // 3. Data Artikel (Masih Dummy dulu gpp)
        $data['articles'] = [
            [
                'judul' => '5 Cara Menjaga Kesehatan Gigi Anak',
                'tanggal' => '2 Feb 2026',
                'excerpt' => 'Menjaga kesehatan gigi susu sangat penting...',
                'gambar' => 'blog-1.jpg'
            ],
            // ... artikel lain bisa ditambah nanti
        ];

        // 4. Kirim semua data ke View
        return view('landing_page', $data);
    }
}