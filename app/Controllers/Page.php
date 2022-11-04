<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = ['title' => 'SELAMAT DATANG ' . strtoupper(user()->username)];
        return view('page/welcome', $data);
    }
}
