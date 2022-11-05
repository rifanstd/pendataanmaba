<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Admin',
            'admin' => $this->adminModel->getAdmin()
        ];

        return view('page/admin/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Admin'
        ];

        return view('page/admin/create', $data);
    }
}
