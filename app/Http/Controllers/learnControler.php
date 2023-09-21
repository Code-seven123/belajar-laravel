<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\learn;

class learnControler extends Controller
{
    public function index(){
        return view('welcome', [
            'title' => 'Welcome',
            'data' => [
                'nama' => 'Maulana & Rahma',
                'skl' => 'SMK Negeri 1 Maja',
                'kelas' => '11',
                'jrs' => 'RPL'
            ]
        ]);
    }
    public function about(){
        return view('about', [
            'title' => 'About'
        ]);
    }
    public function home(){
        return view('home', [
            'title' => 'Home'
        ]);
    }
    public function profil(){
        return view('profil', [
            'title' => 'Profil'
        ]);
    }
}
