@extends('master2')

@section('konten')
    @foreach ($pegawai as $p)
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="{{ asset('./image/marklee.jpg') }}" alt="Card image">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $p->pegawai_nama }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form class = "form-horizontal" role = "form">
                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                            <div class = "col-sm-10">
                                <input type = "text" name="nama" class = "form-control" id = "nama"
                                    value="{{ $p->pegawai_nama }}" readonly>
                            </div>
                        </div>

                        <div class = "form-group">
                            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                            <div class = "col-sm-10">
                                <input type = "text" name="jabatan" class = "form-control" id = "jabatan"
                                    value="{{ $p->pegawai_jabatan }}" readonly>
                            </div>
                        </div>

                        <div class = "form-group">
                            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                            <div class = "col-sm-10">
                                <input type = "text" name="umur" class = "form-control" id = "umur"
                                    value="{{ $p->pegawai_umur }}" readonly>
                            </div>
                        </div>

                        <div class = "form-group">
                            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                            <div class = "col-sm-10">
                                <input type = "text" name="alamat" class = "form-control" id = "alamat"
                                    value="{{ $p->pegawai_alamat }}" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="/pegawai" class="btn btn-primary">OK</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
