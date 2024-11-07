<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroControll;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libro/registro', [LibroControll::class, 'index'])->name('registro.index');
Route::post('/registro/store', [LibroControll::class, 'store'])->name('registro.store');
