<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $data = ['title' => 'SELAMAT DATANG'];
=======
        $data = ['title' => 'SELAMAT DATANG ' . strtoupper(user()->username)];
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        return view('page/welcome', $data);
    }
}
