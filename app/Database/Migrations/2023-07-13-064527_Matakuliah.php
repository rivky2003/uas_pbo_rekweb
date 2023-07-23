<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matakuliah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'kode_mk' => [
                'type'      => 'VARCHAR',
                'constraint' => 30,
            ],
            'nama_mk' => [
                'type'      => 'VARCHAR',
                'constraint' => 255,
            ],
            'sks' => [
                'type'       => 'INT',
                'constraint' => 255,
            ],

            'semester' => [
                'type'      => 'INT',
                'constraint' => 5,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mata_kuliah', true);
    }

    public function down()
    {
        $this->forge->dropTable('mata_kuliah');
    }
}
