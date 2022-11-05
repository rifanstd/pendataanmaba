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
        $data = [
            'title' => 'Tambah Data Fakultas',
            'validation' => \Config\Services::validation()
        ];

        return view('page/fakultas/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama' => 'required|is_unique[fakultas.nama_fakultas]',
        ])) {
            return redirect()->to('/fakultas/create')->withInput();
        }

        $data = [
            'nama_fakultas' => $this->request->getVar('nama')
        ];

        $this->fakultasModel->insert($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('fakultas/index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Fakultas',
            'fakultas' => $this->fakultasModel->getByID($id),
            'validation' => \Config\Services::validation()

        ];

        return view('page/fakultas/edit', $data);
    }

    public function update($id)
    {
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

        $this->fakultasModel->update($id, [
            'nama_fakultas' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/fakultas/index');
    }

    public function delete($id)
    {
        $this->fakultasModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/fakultas/index');
    }
}
