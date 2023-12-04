@extends('master2')

@section('konten')
    <div class="container pt-4">
        <h3>Edit Data Pegawai</h3>
        <a class="btn btn-primary" href="/pegawai">Kembali</a>
    </div>

    @foreach ($pegawai as $p)
        <div class="container pt-5">
            <form class = "form-horizontal" role = "form" action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                    <div class = "col-sm-10">
                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                        <input type = "text" name="nama" class = "form-control" id = "nama" required="required"
                            value="{{ $p->pegawai_nama }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="jabatan" class = "form-control" id = "jabatan" required="required"
                            value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="umur" class = "form-control" id = "umur" required="required"
                            value="{{ $p->pegawai_umur }}">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                    <div class = "col-sm-10">
                        <input type = "text" name="alamat" class = "form-control" id = "alamat" required="required"
                            value="{{ $p->pegawai_alamat }}">
                    </div>
                </div>

                <div class="container pt-4">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    @endforeach

@endsection
