@extends('layout.start')

@section('container')
    @foreach($mahasiswa as $mhs)
        <form action="/home/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $mhs->id }}"><br>
            Nama : <input type="text" required="required" name="nama" value="{{ $mhs->nama }}"><br>
            umur : <input type="number" required="required" name="umur" value="{{ $mhs->umur }}"><br>
            kota : <input type="text" required="required" name="kota" value="{{ $mhs->kota }}"><br>
            <button type="submit">Simpan Data</button>
        </form>
    @endforeach
@endsection