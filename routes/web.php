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