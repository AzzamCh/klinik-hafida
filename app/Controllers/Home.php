<?php

namespace App\Controllers;

use App\Models\PoliModel;
use App\Models\DokterModel;
use App\Models\ArtikelModel; // 1. Jangan lupa load model Artikel

class Home extends BaseController
{
    public function index()
    {
        // Panggil semua Model yang dibutuhkan
        $poliModel = new PoliModel();
        $dokterModel = new DokterModel();
        $artikelModel = new ArtikelModel();

        // Ambil Data dari Database
        $data['layanan_kami'] = $poliModel->findAll(); 
        $data['para_dokter'] = $dokterModel->findAll();

        // 2. Ambil Data Artikel ASLI dari Database
        // 'orderBy' agar berita terbaru muncul paling atas
        // 'findAll(3)' agar cuma 3 berita yang muncul di halaman depan
        $data['articles'] = $artikelModel->orderBy('tanggal', 'DESC')->findAll(3);

        // Kirim semua data ke View
        return view('landing_page', $data);
    }
}