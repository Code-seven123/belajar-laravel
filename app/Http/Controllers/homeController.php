<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        $mahasiswa=DB::table('mahasiswas')->get();

        return view('mahasiswa',[
            'mahasiswa'=> $mahasiswa,
            'title'=>'mahasiswa'
        ]);
    }

    public function tambahData(){
        return view('form_data', [
            'title' => 'tambah data'
        ]);
    }

    public function simpan(Request $request){
        DB::table('mahasiswas')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kota' => $request->kota,
        ]);

        return redirect('/home');

    }

}
