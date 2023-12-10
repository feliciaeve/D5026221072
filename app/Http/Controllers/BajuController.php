<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BajuController extends Controller
{
    public function index()
    {
        $baju = DB::table('baju')->paginate();
        return view('indexBaju',['baju' => $baju]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahBaju');
    }

    public function store(Request $request){
        DB::table('baju')-> insert([
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->has('is_checked') ? 'y' : 'n'
        ]);
        return redirect('/baju');
    }

    public function edit($id){
        // mengambil data baju berdasarkan id yang dipilih
        $baju = DB::table('baju')
                    ->where('kodebaju', $id)
                    ->get();

        // passing data harddisk yang didapat ke view edit.blade.php
        return view('editBaju', ['baju' => $baju]);
    }

    public function update(Request $request){

        DB::table('baju')->where('kodebaju', $request->id) -> update([
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->has('is_checked') ? 'Y' : 'N'
        ]);
        //alihkan halaman ke halaman baju
        return redirect('/baju');
    }

    public function hapus($id){
        // menghapus data baju berdasarkan id yang dipilih
        DB::table('baju')
            ->where('kodebaju', $id)
            ->delete();
        // alihkan ke halaman baju
        return redirect('/baju');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
		$baju = DB::table('baju')
                    ->where('merkbaju','like',"%".$cari."%")
                    ->paginate();
    		// mengirim data baju ke view index
		return view('indexBaju',['baju' => $baju]);
	}

    public function view($id){
        // mengambil data baju berdasarkan id yang dipilih
        $baju = DB::table('baju')
                    ->where('kodebaju', $id)
                    ->get();

        // passing data baju yang didapat ke view edit.blade.php
        return view('viewBaju', ['baju' => $baju]);
    }
}
