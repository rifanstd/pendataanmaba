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
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getAllMahasiswa(),
        ];

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

    // Untuk superadmin dan admin
    public function validasi($id)
    {
        $data = [
            'title' => 'Validasi Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getByID($id),
            'prodi' => $this->prodiModel->findAll(),
            'jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $this->fakultasModel->findAll()
        ];

        return view('page/mahasiswa/validasi', $data);
    }

    public function save_validasi($id)
    {
        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'nik' => $this->request->getVar('nik'),
        //     'npm' => $this->request->getVar('npm'),
        //     'angkatan' => $this->request->getVar('angkatan'),
        //     'kurikulum' => $this->request->getVar('kurikulum'),
        //     'status' => $this->request->getVar('status'),
        //     'jalur_pendaftaran' => $this->request->getVar('jalur_pendaftaran'),
        //     'validasi' => 'Valid',
        //     'prodi_id' => $this->request->getVar('prodi_id'),
        //     'jurusan_id' => $this->request->getVar('jurusan_id'),
        //     'fakultas_id' => $this->request->getVar('fakultas_id'),
        // ];

        // dd($data);

        $this->mahasiswaModel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            'kurikulum' => $this->request->getVar('kurikulum'),
            'status' => $this->request->getVar('status'),
            'jalur_pendaftaran' => $this->request->getVar('jalur_pendaftaran'),
            'validasi' => 'Valid',
            'prodi_id' => $this->request->getVar('prodi_id'),
            'jurusan_id' => $this->request->getVar('jurusan_id'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ]);

        return redirect()->to('/validasi/' . $id);
    }
}
