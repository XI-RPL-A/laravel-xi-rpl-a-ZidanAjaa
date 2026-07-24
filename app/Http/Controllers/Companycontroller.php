<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companycontroller extends Controller
{
     public function Home(){
        return "<h1>Home</h1>
        <p>Selamat Datang di Website Company Profile.</p>";
     }

     public function Products($category = 'Semua'){
        return "<h1>Product</h1>
        <p>Kategori Produk: <b>$category</b></p>";
     }

     public function news($berita = null){
        if($berita == null){
            return "<h1>News</h1>
            <p>Daftar Berita Perusahaan</p>";
        }
        return "<h1>Detail News</h1>
        <p>Judul Berita : <b>$berita</b><p>";
     }
     public function program($name = 'Progam'){
        return "<h1>Program</h1><p>Program: <b>$name</b></p>";
     }
     
      public function about(){
        return "<h1>About</h1>
        <p>Tentang Perusahaan</p>";
      }
}
