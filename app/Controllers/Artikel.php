<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        
        // 1. Tangkap kata kunci pencarian (kalau ada)
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            // Kalau ada yang dicari, cari di Judul ATAU Isi Artikel
            $artikel = $model->like('judul', $keyword)->orLike('isi_artikel', $keyword);
        } else {
            // Kalau tidak ada, ambil semua (seperti biasa)
            $artikel = $model;
        }

        $data = [
            'title'   => 'Berita & Kegiatan Klinik Hafida',
            // Kita pakai pagination (6 berita per halaman) biar rapi
            'artikel' => $artikel->orderBy('tanggal', 'DESC')->paginate(6, 'artikel'),
            'pager'   => $model->pager,
            'keyword' => $keyword // Kirim kata kunci ke View biar tetap muncul di kotak pencarian
        ];

        return view('artikel_list', $data);
    }

    public function detail($slug)
    {
        $model = new ArtikelModel();
        // Cari berita berdasarkan slug
        $berita = $model->where('slug', $slug)->first();

        // Jika berita tidak ditemukan, tampilkan error 404
        if (!$berita) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title'   => $berita['judul'],
            'artikel' => $berita // Sesuaikan nama variabel di view detail
        ];

        return view('artikel_detail', $data);
    }
}