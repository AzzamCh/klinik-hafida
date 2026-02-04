<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dokter' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dokter' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'spesialisasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => 'default.jpg',
            ],
            'jadwal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_dokter', true);
        $this->forge->createTable('dokter');
    }

    public function down()
    {
        $this->forge->dropTable('dokter');
    }
}