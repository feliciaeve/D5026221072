<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->paginate();
        return view('indexMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($NRP)
    {
        // mengambil data mahasiswa berdasarkan NRP yang dipilih
        $mahasiswa = DB::table('mahasiswa')
            ->where('NRP', $NRP)
            ->get();

        // passing data mahasiswa yang didapat ke editMahasiswa.blade.php
        return view('editMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('mahasiswa')->where('NRP', $request->NRP)->update([
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswa')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->paginate();
        // mengirim data mahasiswa ke view index
        return view('indexMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function view($NRP)
    {
        // mengambil data mahasiswa berdasarkan NRP yang dipilih
        $mahasiswa = DB::table('mahasiswa')
            ->where('NRP', $NRP)
            ->get();

        // passing data mahasiswa yang didapat ke viewMahasiswa.blade.php
        return view('viewMahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
