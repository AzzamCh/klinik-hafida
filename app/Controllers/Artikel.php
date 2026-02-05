<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        // Halaman Daftar Semua Artikel (Opsional)
        $model = new ArtikelModel();
        $data['artikel'] = $model->orderBy('tanggal', 'DESC')->findAll();
        return view('artikel_list', $data);
    }

    public function detail($slug)
    {
        // Halaman Baca Satu Artikel
        $model = new ArtikelModel();
        $data['artikel'] = $model->where('slug', $slug)->first();

        // Jika berita tidak ditemukan
        if (!$data['artikel']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('artikel_detail', $data);
    }
}