<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\ProdiModel;

class Prodi extends BaseController
{

    public function __construct()
    {
        $this->prodiModel = new ProdiModel();
        $this->jurusanModel = new JurusanModel();
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Program Studi',
            'prodi' => $this->prodiModel->getProdi(),
        ];

        return view('page/prodi/index', $data);
    }

    public function create()
    {
        $data = [
<<<<<<< HEAD
            'title' => 'Tambah Data Jurusan',
            'jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $this->fakultasModel->findAll()
=======
            'title' => 'Tambah Data Program Studi',
            'jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $this->fakultasModel->findAll(),
            'validation' => \Config\Services::validation()
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        ];

        return view('page/prodi/create', $data);
    }

    public function save()
    {
<<<<<<< HEAD
=======
        // validasi input
        if (!$this->validate([
            'nama' => 'required|is_unique[prodi.nama_prodi]',
        ])) {
            return redirect()->to('/prodi/create')->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $data = [
            'nama_prodi' => $this->request->getVar('nama'),
            'jurusan_id' => $this->request->getVar('jurusan_id'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ];

        $this->prodiModel->insert($data);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/prodi/index');
    }

    public function edit($id, $id_jurusan, $id_fakultas)
    {
        $data = [
            'title' => 'Edit Data Jurusan',
            'prodi' => $this->prodiModel->getByID($id),
            'jurusan' => $this->jurusanModel->getByProdi($id_jurusan),
            'all_jurusan' => $this->jurusanModel->findAll(),
            'fakultas' => $this->fakultasModel->getByProdi($id_fakultas),
            'all_fakultas' => $this->fakultasModel->findAll(),
<<<<<<< HEAD
=======
            'validation' => \Config\Services::validation()
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        ];

        return view('page/prodi/edit', $data);
    }

    public function update($id)
    {
<<<<<<< HEAD
=======
        // cek judul
        $prodiLama = $this->prodiModel->getByID($id);

        if ($prodiLama[0]['nama_prodi'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[prodi.nama_prodi]';
        }

        // validasi input
        if (!$this->validate([
            'nama' => $rule_nama,
        ])) {
            return redirect()->to('/prodi/edit/' . $id . '/' . $prodiLama[0]['jurusan_id'] . '/' . $prodiLama[0]['fakultas_id'])->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $this->prodiModel->update($id, [
            'nama_prodi' => $this->request->getVar('nama'),
            'jurusan_id' => $this->request->getVar('jurusan_id'),
            'fakultas_id' => $this->request->getVar('fakultas_id')
        ]);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil diubah');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/prodi/index');
    }

    public function delete($id)
    {
        $this->prodiModel->delete($id);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil dihapus');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/prodi/index');
    }
}
