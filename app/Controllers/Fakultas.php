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
        $data = ['title' => 'Tambah Data Fakultas'];
        return view('page/fakultas/create', $data);
    }

    public function save()
    {
        $data = [
            'nama_fakultas' => $this->request->getVar('nama')
        ];

        $this->fakultasModel->insert($data);

        return redirect()->to('fakultas/index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Fakultas',
            'fakultas' => $this->fakultasModel->getByID($id)
        ];

        return view('page/fakultas/edit', $data);
    }

    public function update($id)
    {
        $this->fakultasModel->update($id, [
            'nama_fakultas' => $this->request->getVar('nama')
        ]);

        return redirect()->to('/fakultas/index');
    }

    public function delete($id)
    {
        $this->fakultasModel->delete($id);

        return redirect()->to('/fakultas/index');
    }
}
