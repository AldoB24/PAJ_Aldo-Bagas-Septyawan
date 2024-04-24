<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::get('/location', [LocationController::class, 'index']);
Route::get('/location/kabupaten/{id}', [LocationController::class, 'getKabupaten']);
Route::get('/location/kecamatan/{id}', [LocationController::class, 'getKecamatan']);
Route::get('/location/kelurahan/{id}', [LocationController::class, 'getKelurahan']);