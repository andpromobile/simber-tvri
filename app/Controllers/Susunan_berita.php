<?php

namespace App\Controllers;

class Susunan_berita extends BaseController
{
    public function index()
    {
        return view('susunan-berita');
    }

    public function form()
    {
        return view('berita-baru');
    }

}