<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Welcome'];
        return view('page/welcome', $data);
    }
}
