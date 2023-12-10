@extends('master2')
@section('konten')
    <h3>Data Baju</h3>

    <a href="/baju">Kembali</a>

    <br />
    <br />
    @foreach ($baju as $b)
        <form action="/baju/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $b->kodebaju }}">
            <div class = "form-group">
                <label for = "merkbaju" class = "col-sm-2 control-label">Merk Baju</label>
                <div class = "col-sm-10">
                    <input required="required" name="merkbaju" type = "text" class = "form-control" id = "merkbaju" value="{{$b->merkbaju}}">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stockbaju" class = "col-sm-2 control-label">Stock Baju</label>
                <div class = "col-sm-10">
                    <input required="required" name="stockbaju" type = "number" class = "form-control" id="stockbaju" value="{{$b->stockbaju}}">
                </div>
            </div>
            <div class = "form-group d-flex flex-row">
                <input class="col-1"  type = "checkbox" id = "tersedia"  name="is_checked" {{ $b->tersedia == 'Y' ? 'checked' : '' }}>
                <label for = "tersedia" class = "control-label">Ketersediaan Baju</label>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
