<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexMahasiswa',['mahasiswa' => $mahasiswa]);

    }

    public function store(Request $request){
        // insert data ke tabel mahasiswa
        DB::table('mahasiswa')-> insert([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('NRP',$id)->delete();

        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function view($id){
        // mengambil data dari table mahasiswa sesuai NRP
        $mahasiswa = DB::table('mahasiswa')
        ->where('NRP', $id)
        ->get();

        return view('viewMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan NRP yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
        // passing data mahasiswa yang didapat ke view editMahasiswa.blade.php
        return view('editMahasiswa',['mahasiswa' => $mahasiswa]);

    }

    // update data mahasiswa
    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
}
