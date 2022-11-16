<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;

class Fakultas extends BaseController
{

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Fakultas',
            'fakultas' => $this->fakultasModel->findAll(),
        ];

        return view('page/fakultas/index', $data);
    }

    public function create()
    {
<<<<<<< HEAD
        $data = ['title' => 'Tambah Data Fakultas'];
=======
        $data = [
            'title' => 'Tambah Data Fakultas',
            'validation' => \Config\Services::validation()
        ];

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return view('page/fakultas/create', $data);
    }

    public function save()
    {
<<<<<<< HEAD
=======
        // validasi input
        if (!$this->validate([
            'nama' => 'required|is_unique[fakultas.nama_fakultas]',
        ])) {
            return redirect()->to('/fakultas/create')->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $data = [
            'nama_fakultas' => $this->request->getVar('nama')
        ];

        $this->fakultasModel->insert($data);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('fakultas/index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Fakultas',
<<<<<<< HEAD
            'fakultas' => $this->fakultasModel->getByID($id)
=======
            'fakultas' => $this->fakultasModel->getByID($id),
            'validation' => \Config\Services::validation()

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        ];

        return view('page/fakultas/edit', $data);
    }

    public function update($id)
    {
<<<<<<< HEAD
=======
        // cek judul
        $fakultasLama = $this->fakultasModel->getByID($id);

        if ($fakultasLama[0]['nama_fakultas'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[fakultas.nama_fakultas]';
        }

        // validasi input
        if (!$this->validate([
            'nama' => $rule_nama,
        ])) {
            return redirect()->to('/fakultas/edit/' . $id)->withInput();
        }

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        $this->fakultasModel->update($id, [
            'nama_fakultas' => $this->request->getVar('nama')
        ]);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil diubah');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/fakultas/index');
    }

    public function delete($id)
    {
        $this->fakultasModel->delete($id);

<<<<<<< HEAD
=======
        session()->setFlashdata('pesan', 'Data berhasil dihapus');

>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return redirect()->to('/fakultas/index');
    }
}
