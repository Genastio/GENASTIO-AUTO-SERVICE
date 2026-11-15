<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::resource('kendaraan', KendaraanController::class);