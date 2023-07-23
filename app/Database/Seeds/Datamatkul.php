<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Datamatkul extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id"=>"1",
                "nama_mk"=>"informatika",
                "sks"=>2,
                "semester"=>4,

            ],
            [
                "id"=>"2",
                "nama_mk"=>"farmasi",
                "sks"=>2,
                "semester"=>4,
            ],
            [
                "id"=>"3",
                "nama_mk"=>"pgsd",
                "sks"=>2,
                "semester"=>4,
            ],
            [
                "id"=>"4",
                "nama_mk"=>"manajemen",
                "sks"=>2,
                "semester"=>4,
            ],
        ];
        $this->db->table('mata_kuliah')->insertBatch($data);
    }
    }
