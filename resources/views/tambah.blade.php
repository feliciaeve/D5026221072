@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input name="jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-8">
               <input name="umur" type = "number" class = "form-control" id = "umur" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8">
               <input name="alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>

@endsection
