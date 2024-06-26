<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\ForgotPasswordController;
use App\Http\Controllers\Login\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\MMController;

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

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);
Route::get('/upload/delete', [UploadController::class, 'delete']);
Route::get('/', [UserController::class, 'index']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/article', [WebController::class, 'index']);

Route::get('/anggota', [MMController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/restore', [GuruController::class, 'restore']);

Route::post('/login', [LoginController::class, 'login']); //route post untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/forgot_password', [ForgotPasswordController::class, 'index']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth'); //route untuk dashboard diperlukan login terlebih dahulu
Route::get('/pengaturan_akun', [UserController::class, 'option'])->middleware('auth'); //route untuk option diperlukan login terlebih dahulu


Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout'); //route untuk logout

