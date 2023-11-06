<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = 7 * 3;
    	return "<h1>Hasil perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog(){
        $nama = "Felicia";
        $alamat = "Keputih, Surabaya";
        $umur = 20;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
