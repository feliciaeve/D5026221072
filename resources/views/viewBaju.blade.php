@extends('master2')

@section('judul_halaman')
    <h3>View Baju</h3>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            @foreach ($baju as $b)
            <fieldset disabled>
                <form action="/baju/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $b->kodebaju }}">
                    <div class="form-group row">
                        <label for="merkbaju" class="col-sm-2 control-label align-self-center">Merk Baju</label>
                        <div class="col-sm-10">
                            <input type="text" required="required" name="merkbaju" value="{{ $b->merkbaju }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stockbaju" class="col-sm-2 control-label align-self-center">Stock Baju</label>
                        <div class="col-sm-10">
                            <input type="number" required="required" name="stockbaju" value="{{ $b->stockbaju }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <input class="col-1" required="required" type="checkbox" id="tersedia"  name="is_checked" {{ $b->tersedia == 'y' ? 'checked' : '' }}>
                        <label for="tersedia" class="control-label">Ketersedian Baju</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/baju" class="btn btn-primary w-25">Kembali</a>
            </div>
        </div>
    </div>
@endsection
