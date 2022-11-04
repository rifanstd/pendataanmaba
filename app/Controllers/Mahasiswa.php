<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use App\Models\ProdiModel;

class Mahasiswa extends BaseController
{

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->prodiModel = new ProdiModel();
        $this->jurusanModel = new JurusanModel();
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
        $data = ['title' => 'Data Mahasiswa'];

        return view('page/mahasiswa/index', $data);
    }

    public function informasi_data_anda()
    {
        $mahasiswa = $this->mahasiswaModel->getByUserID();
        $prodi = $this->prodiModel->getByID($mahasiswa['prodi_id']);
        $jurusan = $this->jurusanModel->getByID($mahasiswa['jurusan_id']);
        $fakultas = $this->fakultasModel->getByID($mahasiswa['fakultas_id']);

        $data = [
            'title' => 'Informasi Data Anda',
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
        ];

        return view('page/mahasiswa/informasi_data_anda', $data);
    }

    public function biodata()
    {
        $mahasiswa = $this->mahasiswaModel->getByUserID();
        $prodi = $this->prodiModel->getByID($mahasiswa['prodi_id']);
        $jurusan = $this->jurusanModel->getByID($mahasiswa['jurusan_id']);
        $fakultas = $this->fakultasModel->getByID($mahasiswa['fakultas_id']);

        $data = [
            'title' => 'Biodata Anda',
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
        ];

        return view('page/mahasiswa/biodata', $data);
    }

    public function edit($id)
    {
        $mahasiswa = $this->mahasiswaModel->getByUserID();
        $prodi = $this->prodiModel->getByID($mahasiswa['prodi_id']);
        $jurusan = $this->jurusanModel->getByID($mahasiswa['jurusan_id']);
        $fakultas = $this->fakultasModel->getByID($mahasiswa['fakultas_id']);

        $data = [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
        ];

        return view('page/mahasiswa/edit', $data);
    }
}
