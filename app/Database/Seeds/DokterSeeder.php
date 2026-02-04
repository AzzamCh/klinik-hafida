<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_dokter'    => 'dr. Budi Santoso',
                'spesialisasi'   => 'Dokter Umum',
                'foto'           => 'doctors-1.jpg',
                'jadwal'         => 'Senin - Kamis (08.00 - 12.00)'
            ],
            [
                'nama_dokter'    => 'drg. Siti Aminah',
                'spesialisasi'   => 'Dokter Gigi',
                'foto'           => 'doctors-2.jpg',
                'jadwal'         => 'Senin - Jumat (13.00 - 17.00)'
            ],
            [
                'nama_dokter'    => 'Bidan Rina, S.Tr.Keb',
                'spesialisasi'   => 'Bidan / KIA',
                'foto'           => 'doctors-3.jpg', // Pastikan ada fotonya atau pakai default
                'jadwal'         => 'Setiap Hari (08.00 - 20.00)'
            ],
        ];

        $this->db->table('dokter')->insertBatch($data);
    }
}