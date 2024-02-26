<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
Route::put('/task/{id}', [TaskController::class, 'update']);
Route::delete('/task/{task}', [TaskController::class, 'delete']);
Route::get('/task/{task}', [TaskController::class, 'show']);
Route::get('/task/{task}/edit', [TaskController::class, 'edit']);


Route::get('/about', function () {
    return 'Ini Halaman About';
});

Route::get('/services', function () {
    return 'Ini Halaman Services';
});

// Route::get('/voter', [VoterController::class, 'viewVoter']);
// Route::get('/admin', [SubjectController::class, 'adminview']);
// Route::get('/student', [SubjectController::class, 'studentview']);
// Route::get('/teacher', [SubjectController::class, 'teacherview']);

// Route::get('/admin_user', [UserController::class, 'adminuser']);
// Route::get('/student_user', [UserController::class, 'studentuser']);
// Route::get('/teacher_user', [UserController::class, 'teacheruser']);
// Route::get('/voters', [VoterController::class, 'viewVoter']);

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/store', [TaskController::class, 'store']);