<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_lengkap' => 'Administrator Utama', // <--- Pastikan ini ada
            'username'     => 'admin',
            'password'     => password_hash('hafida123', PASSWORD_DEFAULT),
            'created_at'   => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}