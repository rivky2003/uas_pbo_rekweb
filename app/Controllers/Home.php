<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\MatkulModel;
use App\Models\NilaiModel;

class Home extends BaseController
{
    protected $mhs, $matkul, $nilai;

    function __construct()
    {
        $this->mhs = new MahasiswaModel();
        $this->matkul = new MatkulModel();
        $this->nilai = new NilaiModel();
    }
    public function index()
    {
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM mahasiswa ");
        $data['mhs'] = $modelG->getResult();
        return view('/mahasiswa/mahasiswa', $data);
    }
    public function addmahasiswa()
    {
        return view('/mahasiswa/add_mhs');
    }
    public function savemahasiswa()
    {
        $this->mhs->insert([
            'id' => $this->request->getPost('id'),
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Mahasiswa Berhasil');
        return redirect()->to('/');
    }
    function editmahasiswa($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        $mhs = $builder->getWhere(['id' => $id])->getRow();
        $data['editmhs'] = $mhs;
        return view('mahasiswa/edit', $data);
    }
    public function updatemahasiswa()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        $data = [
            'id' => $this->request->getVar('id'),
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'jurusan' => $this->request->getPost('jurusan')
        ];
        if ($builder->replace($data)) {
            session()->setFlashdata('message', 'Update Data Mahasiswa Berhasil');
            return redirect()->to('/');
        }
    }
    public function deletemahasiswa($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        if ($builder->delete(['id' => $id])) {
            session()->setFlashdata('message', 'Delete Data Mahasiswa Berhasil');
            return redirect()->to('/');
        }
    }

    //matkul
    public function matakuliah()
    {
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM mata_kuliah ");
        $data['matkul'] = $modelG->getResult();
        return view('matkul/matakuliah', $data);
    }
    public function addmatakuliah()
    {
        return view('/matkul/add_matkul');
    }
    public function savematkul()
    {
        $this->matkul->insert([
            'id' => $this->request->getPost('id'),
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nama_mk' => $this->request->getPost('nama_mk'),
            'sks' => $this->request->getPost('sks'),
            'semester' => $this->request->getPost('semester'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Mata kuliah Berhasil');
        return redirect()->to('/mata-kuliah');
    }
    function editmatakuliah($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mata_kuliah');
        $mhs = $builder->getWhere(['id' => $id])->getRow();
        $data['ematkul'] = $mhs;
        return view('matkul/edit', $data);
    }
    public function updatematakuliah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mata_kuliah');
        $data = [
            'id' => $this->request->getVar('id'),
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nama_mk' => $this->request->getPost('nama_mk'),
            'sks' => $this->request->getPost('sks'),
            'semester' => $this->request->getPost('semester')
        ];
        if ($builder->replace($data)) {
            session()->setFlashdata('message', 'Update Data Mata kuliah Berhasil');
            return redirect()->to('/mata-kuliah');
        }
    }
    public function deletematakuliah($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mata_kuliah');
        if ($builder->delete(['id' => $id])) {
            session()->setFlashdata('message', 'Delete Data Mata kuliah Berhasil');
            return redirect()->to('/mata-kuliah');
        }
    }

    //nilai
    public function nilai()
    {
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM nilai ");
        $data['nilai'] = $modelG->getResult();
        return view('nilai/nilai', $data);
    }
    public function addnilai()
    {
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM mahasiswa");
        $data['data'] = $modelG->getResult();
        $modelK = $db->query("SELECT * FROM mata_kuliah");
        $data['dataku'] = $modelK->getResult();
        return view('/nilai/add_nilai', $data);
    }
    public function savenilai()
    {
        $this->nilai->insert([
            'id' => $this->request->getPost('id'),
            'nim' => $this->request->getPost('nim'),
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nilai' => $this->request->getPost('nilai')
        ]);
        session()->setFlashdata('message', 'Tambah Data Nilai Berhasil');
        return redirect()->to('/nilai');
    }
    public function editnilai($id)
    {
        $db      = \Config\Database::connect();
        $modelG = $db->query("SELECT * FROM mahasiswa");
        $data['data'] = $modelG->getResult();
        $modelK = $db->query("SELECT * FROM mata_kuliah");
        $data['dataku'] = $modelK->getResult();
        $builder = $db->table('nilai');
        $nilai = $builder->getWhere(['id' => $id])->getRow();
        $data['enilai'] = $nilai;
        return view('nilai/edit', $data);
    }
    public function updatenilai()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('nilai');
        $data = [
            'id' => $this->request->getVar('id'),
            'nim' => $this->request->getPost('nim'),
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nilai' => $this->request->getPost('nilai')
        ];
        if ($builder->replace($data)) {
            session()->setFlashdata('message', 'Update Data Nilai Berhasil');
            return redirect()->to('/nilai');
        }
    }
    public function deletenilai($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('nilai');
        if ($builder->delete(['id' => $id])) {
            session()->setFlashdata('message', 'Delete Data Nilai Berhasil');
            return redirect()->to('/nilai');
        }
    }



    //praktisi
    public function user()
    {
        return json_encode(
            array(
                'message' => 'dari function user'
            )
        );
    }
    public function userParam($id, $count)
    {
        $name = $this->request->getVar("nama");
        $age = $this->request->getVar("umur");
        return json_encode(
            array(
                'message' => 'dari function user',
                'id' => $id,
                'count' => $count,
                'name' => $name,
                'age' => $age
            )
        );
    }

    public function hitung($type)
    {
        $v1 = $this->request->getVar("v1");
        $v2 = $this->request->getVar("v2");
        $total = 0;
        if ($type == "tambah") {
            $total = $v1 + $v2;
            return json_encode(array(
                "message" => "berhasil",
                "total" => $total
            ));
        } else if ($type == "kurang") {
            $total = $v1 - $v2;
            return json_encode(array(
                "message" => "berhasil",
                "total" => $total
            ));
        } else {
            return json_encode(array(
                "message" => "tipr yang dimasukkan salah"
            ));
        }
    }
}
