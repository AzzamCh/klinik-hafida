<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();

        $data = [
            'title'   => 'Arsip Berita & Artikel - Klinik Hafida',
            // Gunakan paginate(6) agar dibatasi 6 berita per halaman
            // 'artikel' adalah nama grup pagination (sesuai config)
            'artikel' => $model->orderBy('tanggal', 'DESC')->paginate(6, 'artikel'),
            // Kirim variabel pager untuk tombol halaman
            'pager'   => $model->pager
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