<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

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

Route::get('/about', function () {
    return 'Ini Halaman About';
});

Route::get('/services', function () {
    return 'Ini Halaman Services';
});

Route::get('/voter', [VoterController::class, 'viewVoter']);

Route::get('/admin', [SubjectController::class, 'adminview']);
Route::get('/student', [SubjectController::class, 'studentview']);
Route::get('/teacher', [SubjectController::class, 'teacherview']);

Route::get('/admin_user', [UserController::class, 'adminuser']);
Route::get('/student_user', [UserController::class, 'studentuser']);
Route::get('/teacher_user', [UserController::class, 'teacheruser']);
