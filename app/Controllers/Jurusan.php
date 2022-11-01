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
            'fakultas' => $this->fakultasModel->findAll()
        ];

        return view('page/jurusan/create', $data);
    }

    public function save()
    {
        $data = [
            'nama_jurusan' => $this->request->getVar('nama'),
            'fakultas_id' => $this->request->getVar('fakultas_id'),
        ];

        $this->jurusanModel->insert($data);

        return redirect()->to('/jurusan/index');
    }

    public function edit($id, $id_fakultas)
    {
        $data = [
            'title' => 'Edit Data Jurusan',
            'jurusan' => $this->jurusanModel->getByID($id),
            'fakultas' => $this->fakultasModel->getByJurusan($id_fakultas),
            'all_fakultas' => $this->fakultasModel->findAll(),
        ];

        return view('page/jurusan/edit', $data);
    }

    public function update($id)
    {
        $this->jurusanModel->update($id, [
            'nama_jurusan' => $this->request->getVar('nama'),
            'fakultas_id' => $this->request->getVar('fakultas_id')
        ]);

        return redirect()->to('/jurusan/index');
    }

    public function delete($id)
    {
        $this->jurusanModel->delete($id);

        return redirect()->to('/jurusan/index');
    }
}
