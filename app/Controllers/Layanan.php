<?php

namespace App\Controllers;

use App\Models\PoliModel;

class Layanan extends BaseController
{
    public function detail($slug = null)
    {
        $poliModel = new PoliModel();

        // 1. Cari data poli berdasarkan slug (misal: poli-umum)
        $dataPoli = $poliModel->where('slug', $slug)->first();

        // 2. Kalau tidak ketemu, tampilkan error 404
        if (!$dataPoli) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Layanan tidak ditemukan di database.");
        }

        // 3. Kirim data ke View
        $data = [
            'title' => $dataPoli['nama_poli'] . ' - Klinik Hafida',
            'layanan' => $dataPoli
        ];

        return view('detail_layanan', $data);
    }
}