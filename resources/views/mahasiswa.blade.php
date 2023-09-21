@extends('layout.start')

@section('container')
    <h1>biodata siswa</h1>
    <form action="/home/tambah">
        <table border="3">
            <tr>
                <th>nama</th>
                <th>umur</th>
                <th>kota</th>
                <th>opsi</th>
            </tr>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->umur}}</td>
                    <td>{{$mhs->kota}}</td>
                    <td>
                        <a href="/home/edit/{{$mhs->id}}">edit</a> |
                        <a href="/home/hapus/{{$mhs->id}}">hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <input type="submit" value="tambah data">
    </form>
@endsection