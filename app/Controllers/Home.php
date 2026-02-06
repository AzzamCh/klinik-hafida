<?php

namespace App\Controllers;

// Load semua Model yang dibutuhkan agar Controller kenal dengan Database
use App\Models\PoliModel;
use App\Models\DokterModel;
use App\Models\ArtikelModel;
use App\Models\CarouselModel;

class Home extends BaseController
{
    public function index()
    {
        // 1. Instansiasi (Siapkan) semua Model
        $poliModel     = new PoliModel();
        $dokterModel   = new DokterModel();
        $artikelModel  = new ArtikelModel();
        $carouselModel = new CarouselModel();

        // =========================================================================
        // BAGIAN 1: AMBIL DATA LIST (Untuk ditampilkan looping di View)
        // =========================================================================
        
        // Ambil semua data Poli (untuk bagian Layanan)
        $data['layanan_kami'] = $poliModel->findAll(); 
        
        // Ambil semua data Dokter (untuk bagian Tim Medis)
        $data['para_dokter']  = $dokterModel->findAll();
        
        // Ambil 3 Artikel terbaru (diurutkan tanggal terbaru, ambil 3 saja)
        $data['articles']     = $artikelModel->orderBy('tanggal', 'DESC')->findAll(3);
        
        // Ambil semua data Slider (untuk Carousel Banner atas)
        $data['slider']       = $carouselModel->findAll(); 

        // =========================================================================
        // BAGIAN 2: AMBIL DATA STATISTIK (Untuk Angka Real-time)
        // =========================================================================
        
        // Menghitung total baris di tabel dokter
        $data['total_dokter'] = $dokterModel->countAll(); 
        
        // Menghitung total baris di tabel poli
        $data['total_poli']   = $poliModel->countAll();   

        // =========================================================================
        // KIRIM KE VIEW
        // =========================================================================
        return view('landing_page', $data);
    }
}