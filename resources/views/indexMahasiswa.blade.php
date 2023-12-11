@extends('master2')
@section('title', 'Database Mahasiswa')

@section('judul_halaman')
    <h2>EAS Felicia Evelina Soetjipto - 5026221072</h2>
    <h3>Data Mahasiswa</h3>
    <br>
@endsection

@section('konten')
    <p>Cari Data Mahasiswa :</p>
    <form action="/mahasiswa/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan Nama .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary ml-3">
    </form>

    <br/>
    <br>
    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr style="text-align: center;">
                <td>{{ $m->NRP }}</td>
                <td>{{ $m->Nama }}</td>
                <td>{{ $m->Jurusan }}</td>
                <td>{{ $m->IPK }}</td>
                <td>
                    <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    |
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
