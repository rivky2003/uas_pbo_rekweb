<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'nim' => [
                'type'      => 'INT',
                'constraint' => 8,
            ],
            'kode_mk' => [
                'type'       => 'varchar',
                'constraint' => 30,
            ],

            'nilai' => [
                'type'      => 'varchar',
                'constraint' => 10,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('nilai', true);
    }

    public function down()
    {
        $this->forge->dropTable('nilai');
    }
}
