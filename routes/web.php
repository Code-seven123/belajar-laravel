<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\learnControler;
use App\Http\Controllers\homeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [learnControler::class, 'index']);

Route::get('/about', [learnControler::class, 'about']);

Route::get('/beranda', [learnControler::class, 'home']);

Route::get('/profil', [learnControler::class, 'profil']);

Route::get('/home', [homeController::class, 'index']);

Route::get('/home/tambah', [homeController::class, 'tambahData']);

Route::post('/home/simpan', [homeController::class, 'simpan']);