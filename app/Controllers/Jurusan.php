<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    public function __construct()
    {
        $this->jurusanModel = new JurusanModel();
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jurusan',
            'jurusan' => $this->jurusanModel->getJurusan(),
        ];

        return view('page/jurusan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Jurusan',
<<<<<<< HEAD
            'fakultas' => $this->fakultasModel->findAll()
=======
            'fakultas' => $this->fakultasModel->findAll(),
            'validation' => \Config\Services::validation()
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        ];

        return view('page/jurusan/create', $data);
    }

    public function save()
    {
<<<<<<< HEAD
=======
        // validasi input
        if (!$this->validate([
            'nama' => 'required|is_unique[jurusan.nama_jurusan]',
        ])) {
            return redirect()->to('/jurusan/create')->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $data = [
            'nama_jurusan' => $this->request->getVar('nama'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ];

        $this->jurusanModel->insert($data);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/jurusan/index');
    }

    public function edit($id, $id_fakultas)
    {
<<<<<<< HEAD
=======

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $data = [
            'title' => 'Edit Data Jurusan',
            'jurusan' => $this->jurusanModel->getByID($id),
            'fakultas' => $this->fakultasModel->getByJurusan($id_fakultas),
            'all_fakultas' => $this->fakultasModel->findAll(),
<<<<<<< HEAD
=======
            'validation' => \Config\Services::validation()
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        ];

        return view('page/jurusan/edit', $data);
    }

    public function update($id)
    {
<<<<<<< HEAD
=======
        // cek nama
        $jurusanLama = $this->jurusanModel->getByID($id);

        if ($jurusanLama[0]['nama_jurusan'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[jurusan.nama_jurusan]';
        }

        // validasi input
        if (!$this->validate([
            'nama' => $rule_nama,
        ])) {
            return redirect()->to('/jurusan/edit/' . $id)->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $this->jurusanModel->update($id, [
            'nama_jurusan' => $this->request->getVar('nama'),
            'fakultas_id' => $this->request->getVar('fakultas_id')
        ]);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil diubah');


>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/jurusan/index');
    }

    public function delete($id)
    {
        $this->jurusanModel->delete($id);

        return redirect()->to('/jurusan/index');
    }
}
