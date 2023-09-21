@extends('layout.start')

@section('container')
    <h1>form tambah data</h1>
    <form action="/home/simpan" method="post">
        {{ csrf_field()}}
        nama: <input type="text" name="nama" required="required">
        <br>
        umur: <input type="number" name="umur" required="required">
        <br>
        kota: <input type="text" name="kota" required="required">
        <br>
        <button type="submit">simpan data</button>
    </form>  
@endsection