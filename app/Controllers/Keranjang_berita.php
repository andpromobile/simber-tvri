<?php

namespace App\Controllers;

class Keranjang_berita extends BaseController
{
    public function index()
    {
        return view('keranjang-berita');
    }


    public function form()
    {
        return view('berita-baru');
    }
}