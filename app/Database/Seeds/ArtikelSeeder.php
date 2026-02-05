<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul'       => '5 Cara Menjaga Kesehatan Gigi',
                'slug'        => 'cara-menjaga-kesehatan-gigi',
                'isi_artikel' => 'Menjaga kesehatan gigi sangat penting untuk mencegah gigi berlubang...',
                'gambar'      => 'blog-1.jpg', // Pastikan ada file ini atau pakai dummy
                'tanggal'     => date('Y-m-d')
            ],
            [
                'judul'       => 'Pentingnya Imunisasi Bagi Anak',
                'slug'        => 'pentingnya-imunisasi-anak',
                'isi_artikel' => 'Imunisasi adalah cara terbaik melindungi anak dari penyakit berbahaya...',
                'gambar'      => 'blog-2.jpg',
                'tanggal'     => date('Y-m-d')
            ]
        ];

        $this->db->table('artikel')->insertBatch($data);
    }
}