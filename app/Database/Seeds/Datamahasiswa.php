<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Datamahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                "id"=>"1",
                "nim"=>211111116,
                "nama"=>"Supriadi",
                "jk"=>"Laki laki",
                "jurusan"=>"informatika",

            ],
            [
                "id"=>"2",
                "nim"=>211111117,
                "nama"=>"Suranto",
                "jk"=>"Laki laki",
                "jurusan"=>"informatika",

            ],
            [
                "id"=>"3",
                "nim"=>211111118,
                "nama"=>"Slamet",
                "jk"=>"Laki laki",
                "jurusan"=>"informatika",

            ],
            [
                "id"=>"4",
                "nim"=>211111119,
                "nama"=>"Bagas",
                "jk"=>"Laki laki",
                "jurusan"=>"informatika",

            ],
            
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}

    

