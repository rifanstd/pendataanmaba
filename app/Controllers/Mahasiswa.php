<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use App\Models\ProdiModel;

class Mahasiswa extends BaseController
{
<<<<<<< HEAD

=======
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->prodiModel = new ProdiModel();
        $this->jurusanModel = new JurusanModel();
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
<<<<<<< HEAD
        $data = ['title' => 'Data Mahasiswa'];
=======
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getAllMahasiswa(),
        ];

        // dd($data);
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166

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

<<<<<<< HEAD
    public function biodata()
=======
    public function edit_biodata($id)
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
    {
        $mahasiswa = $this->mahasiswaModel->getByUserID();
        $prodi = $this->prodiModel->getByID($mahasiswa['prodi_id']);
        $jurusan = $this->jurusanModel->getByID($mahasiswa['jurusan_id']);
        $fakultas = $this->fakultasModel->getByID($mahasiswa['fakultas_id']);

        $data = [
<<<<<<< HEAD
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
=======
            'title' => 'Edit Data Anda',
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'all_prodi' => $this->prodiModel->findAll(),
            'jurusan' => $jurusan,
            'all_jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $fakultas,
            'all_fakultas' => $this->fakultasModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('page/mahasiswa/edit_biodata', $data);
    }

    public function update($id)
    {
        $mahasiswaLama = $this->mahasiswaModel->getByID($id);

        if (count($mahasiswaLama) !== 0) {
            // cek nik
            if ($mahasiswaLama[0]['nik'] == $this->request->getVar('nik')) {
                $rule_nik = 'required';
            } else {
                $rule_nik = 'required|is_unique[mahasiswa.nik]';
            }

            // cek npm
            if ($mahasiswaLama[0]['npm'] == $this->request->getVar('npm')) {
                $rule_npm = 'required';
            } else {
                $rule_npm = 'required|is_unique[mahasiswa.npm]';
            }

            // validasi input
            if (!$this->validate([
                'nik' => $rule_nik,
                'npm' => $rule_npm,
            ])) {
                return redirect()->to('/mahasiswa/edit_biodata/' . $id)->withInput();
            }
        }

        $this->mahasiswaModel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'npm' => $this->request->getVar('npm'),
            'prodi_id' => $this->request->getVar('prodi_id'),
            'jurusan_id' => $this->request->getVar('jurusan_id'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/mahasiswa/informasi_data_anda');
    }

    public function daftar_mahasiswa()
    {
        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getAllMahasiswa(),
        ];

        return view('page/mahasiswa/daftar_mahasiswa', $data);
    }

    // Untuk superadmin dan admin
    public function validasi($id)
    {
        $data = [
            'title' => 'Validasi Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getByID($id),
            'prodi' => $this->prodiModel->findAll(),
            'jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $this->fakultasModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('page/mahasiswa/validasi', $data);
    }

    public function save_validasi($id)
    {
        $this->mahasiswaModel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'angkatan' => $this->request->getVar('angkatan'),
            'kurikulum' => $this->request->getVar('kurikulum'),
            'status' => $this->request->getVar('status'),
            'jalur_pendaftaran' => $this->request->getVar('jalur_pendaftaran'),
            'validasi' => 'Valid',
            'prodi_id' => $this->request->getVar('prodi_id'),
            'jurusan_id' => $this->request->getVar('jurusan_id'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil divalidasi');

        return redirect()->to('/data_mahasiswa');
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
    }
}
