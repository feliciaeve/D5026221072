@extends('master2')
@section('title', 'Database Baju')

@section('judul_halaman')
    <h2>Data Baju</h2>

    <a href="/baju/tambah" class="btn btn-primary"> + Tambah Baju Baru</a>
    <br>
    
@endsection

@section('konten')
    <p>Cari Data Baju :</p>
    <form action="/baju/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Baju berdasarkan merk .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary ml-3">
    </form>

    <br/>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Baju</th>
            <th>Merk Baju</th>
            <th>Stock Baju</th>
            <th>Ketersediaan Baju</th>
            <th>Opsi</th>
        </tr>
        @foreach ($baju as $b)
            <tr>
                <td>{{ $b->kodebaju }}</td>
                <td>{{ $b->merkbaju }}</td>
                <td>{{ $b->stockbaju }}</td>
                <td class="text-center">
                    <input type="checkbox" name="is_checked" {{ $b->tersedia == 'y' ? 'checked' : '' }} disabled>
                </td>
                <td>
                    <a href="/baju/view/{{ $b->kodebaju }}" class="btn btn-success">View</a>
                    |
                    <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
