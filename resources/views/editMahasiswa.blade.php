@extends('master2')
@section('konten')
    <h3>Data Mahasiswa</h3>

    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>

    <br />
    <br />
    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="NRP" class="col-sm-2 control-label">NRP</label>
                <div class="col-sm-10">
                    <input required="required" name="NRP" type="text" class="form-control" id="NRP" value="{{ $m->NRP }}">
                </div>
            </div>
            <div class="form-group">
                <label for="Nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                    <input required="required" name="Nama" type="text" class="form-control" id="Nama" value="{{ $m->Nama }}">
                </div>
            </div>
            <div class="form-group">
                <label for="Jurusan" class="col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <input required="required" name="Jurusan" type="text" class="form-control" id="Jurusan" value="{{ $m->Jurusan }}">
                </div>
            </div>
            <div class="form-group">
                <label for="IPK" class="col-sm-2 control-label">IPK</label>
                <div class="col-sm-10">
                    <input required="required" name="IPK" type="number" class="form-control" id="IPK" value="{{ $m->IPK }}">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
