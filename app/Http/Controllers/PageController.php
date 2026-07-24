<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class PageController extends Controller
{
  public function index()
    {
        return 'Hi! Selamat Datang di Website Laravel';
    }

   public function about()
    {
        return 'NIM: 26030 <br> Nama: Zidaen Ahmad Zein <br> Kelas: XI - RPLA';
    }

    public function articles($id)
    {
        return "Ini adalah halaman Artikel dengan Id: " . $id;
    }
}
