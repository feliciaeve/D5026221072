@extends('master2')
@section('konten')
    <h3>Data Baju</h3>

    <a href="/baju"> Kembali</a>

    <br />
    <br />

    <form action="/baju/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="merkbaju" class="col-sm-2 control-label">Merk Baju</label>
            <div class="col-sm-10">
                <input required="required" name="merkbaju" type="text" class="form-control" id="merkbaju"
                    placeholder="Masukkan merk baju ..">
            </div>
        </div>
        <div class="form-group">
            <label for="stockbaju" class="col-sm-2 control-label">Stock Baju</label>
            <div class="col-sm-10">
                <input required="required" name="stockbaju" type="number" class="form-control" id="stockbaju"
                    placeholder="Masukkan jumlah stock baju ..">
            </div>
        </div>
        <div class="form-group d-flex flex-row">
            <input class="col-1" name="is_checked" type="checkbox" id="tersedia" value="Ketersediaan barang">
            <label for="tersedia" class="control-label">Ketersedian Baju</label>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
