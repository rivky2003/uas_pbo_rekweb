<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataNilai extends Seeder
{
    public function run()
    {
        $data = [
            [
                "nim" => 211111116,
                "kode_mk" => "INF2011",
                "nilai" => "A"
            ],
            [
                "nim" => 211111117,
                "kode_mk" => "INF2012",
                "nilai" => "B"
            ],
            [
                "nim" => 211111118,
                "kode_mk" => "INF2013",
                "nilai" => "B"
            ],
            [
                "nim" => 211111119,
                "kode_mk" => "INF2014",
                "nilai" => "C"
            ]
        ];
        $this->db->table('nilai')->insertBatch($data);
    }
}
