<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PoliSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_poli' => 'Poli Umum',
                'deskripsi' => 'Pemeriksaan kesehatan umum, konsultasi dokter, dan pengobatan penyakit ringan hingga kronis.',
                'icon'      => 'fas fa-heartbeat',
                'slug'      => 'poli-umum'
            ],
            [
                'nama_poli' => 'Poli Gigi',
                'deskripsi' => 'Perawatan gigi, tambal, cabut, pembersihan karang gigi (scaling), dan konsultasi.',
                'icon'      => 'fas fa-tooth',
                'slug'      => 'poli-gigi'
            ],
            [
                'nama_poli' => 'KIA & KB',
                'deskripsi' => 'Layanan Kesehatan Ibu dan Anak, pemeriksaan kehamilan, imunisasi bayi, dan KB.',
                'icon'      => 'fas fa-baby',
                'slug'      => 'kia-kb'
            ],
            [
                'nama_poli' => 'Laboratorium',
                'deskripsi' => 'Cek Gula Darah, Kolesterol, Asam Urat, Golongan Darah, dan tes urin sederhana.',
                'icon'      => 'fas fa-dna',
                'slug'      => 'laboratorium'
            ],
            [
                'nama_poli' => 'Apotek',
                'deskripsi' => 'Instalasi farmasi yang menyediakan obat-obatan lengkap dan terjamin keasliannya sesuai resep.',
                'icon'      => 'fas fa-pills',
                'slug'      => 'apotek'
            ],
            [
                'nama_poli' => 'Surat Sehat',
                'deskripsi' => 'Pembuatan surat keterangan sehat untuk keperluan melamar kerja, sekolah, atau perjalanan.',
                'icon'      => 'fas fa-notes-medical',
                'slug'      => 'surat-sehat'
            ]
        ];

        // Masukkan data ke tabel 'poli'
        $this->db->table('poli')->insertBatch($data);
    }
}