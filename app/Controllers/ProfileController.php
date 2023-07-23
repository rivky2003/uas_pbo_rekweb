<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Matakuliah;
use App\Models\MahasiswaModel;
use App\Models\MatkulModel;
use App\Models\NilaiModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $data['book'] = $this->request->getVar("buku");
        $data['nama'] = 'UNU JOGJA';
        $data['user'] = [
            ['name' => 'syauqi', 'age' => 35],
            ['name' => 'fadmi', 'age' => 32],
            ['name' => 'arif', 'age' => 21]
        ];
        return view('welcome_message', $data);
    }

    public function getAllNilai()
    {
        $model = new NilaiModel();
        $data['nilai'] = $model->findAll();
        // return json_encode(
        //     array(
        //         "data" => $data['nilai']
        //     )
        // );
        return view('nilai', $data);
    }

    public function getAllMatkul()
    {
        $model = new MatkulModel();
        $data['mata_kuliah'] = $model->findAll();
        // return json_encode(
        //     array(
        //         "data" => $data['mata_kuliah']
        //     )
        // );
        return view('tugas', $data);
    }
    public function getAllMahasiswa()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        // return json_encode(
        //     array(
        //         "data" => $data['mahasiswa']
        //     )
        // );
        return view('mahasiswa', $data);
    }
}
