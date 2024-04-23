<?php

use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Levelcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [Levelcontroller::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [Usercontroller::class, 'tambah']);
Route::get('/user/tambah_simpan', [Usercontroller::class, 'tambah_simpan']);
Route::get('/user/ubah{id}', [Usercontroller::class, 'ubah']);
Route::get('/user/ubah_simpan/{id}', [Usercontroller::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [Usercontroller::class, 'hapus']);
