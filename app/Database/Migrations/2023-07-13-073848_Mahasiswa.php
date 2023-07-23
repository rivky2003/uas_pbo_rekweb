<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
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
            'nim' => [
                'type'      => 'INT',
                'constraint' => 8,
            ],
            'nama' => [
                'type'       => 'varchar',
                'constraint' => 55,
            ],

            'jk' => [
                'type'      => 'varchar',
                'constraint' => 12,
            ],
            'jurusan' => [
                'type'      => 'varchar',
                'constraint' => 20,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswa', true);
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
