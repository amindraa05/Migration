@extends('layout.master')
@section('content')
<div class="container">
    <h4>Tambah Buku</h4>
    <form action="{{ route('buku.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Tgl Terbit</td>
                <td><input type="text" name="tgl_terbit"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-light">Simpan</button>
                    <a class="btn-btn light" href="/buku">Batal</a>
                </td>
            </tr>
        </table>
</div>
@endsection