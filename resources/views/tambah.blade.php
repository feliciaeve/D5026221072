@extends('master2')

@section('konten')
    <div class="container pt-4">
        <h3>Tambah Data Pegawai</h3>
        <a class="btn btn-primary" href="/pegawai">Kembali</a>
    </div>

    <div class="container pt-4">
        <form class = "form-horizontal" role = "form" action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <div class = "form-group">
                <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                <div class = "col-sm-10">
                    <input type = "text" name="nama" class = "form-control" id = "nama" required="required"
                        placeholder = "Masukkan Nama">
                </div>
            </div>

            <div class = "form-group">
                <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                <div class = "col-sm-10">
                    <input type = "text" name="jabatan" class = "form-control" id = "jabatan" required="required"
                        placeholder = "Masukkan Jabatan">
                </div>
            </div>

            <div class = "form-group">
                <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                <div class = "col-sm-10">
                    <input type = "text" name="umur" class = "form-control" id = "umur" required="required"
                        placeholder = "Masukkan Umur">
                </div>
            </div>

            <div class = "form-group">
                <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                <div class = "col-sm-10">
                    <input type = "text" name="alamat" class = "form-control" id = "alamat" required="required"
                        placeholder = "Masukkan Alamat">
                </div>
            </div>
            <div class="container pt-4">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>
        </form>
    </div>
@endsection
