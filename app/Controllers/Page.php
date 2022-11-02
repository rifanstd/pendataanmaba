<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = ['title' => 'SELAMAT DATANG'];
        return view('page/welcome', $data);
    }
}
