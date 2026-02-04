<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Poli extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_poli' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_poli' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'icon' => [ 
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'default'    => 'fas fa-stethoscope', // Icon default
            ],
            'slug' => [ // Untuk URL cantik (misal: poli-gigi)
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_poli', true);
        $this->forge->createTable('poli');
    }

    public function down()
    {
        $this->forge->dropTable('poli');
    }
}