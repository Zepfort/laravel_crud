<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', function() {
    return view('pages.dashboard');
})->middleware(['role:Admin,Users'])->name('dashboard');

Route::middleware(['auth', 'role:Admin'])->group(function() {
    Route::get('/resident', [ResidentController::class, 'index']);
    Route::get('/resident/create', [ResidentController::class, 'create']);
    Route::get('/resident/edit/{id}', [ResidentController::class,  'edit']);
    Route::post('/resident', [ResidentController::class, 'store']);
    Route::put('/resident/{id}', [ResidentController::class, 'update']);
    Route::delete('/resident/{id}', [ResidentController::class, 'delete']);
});

Route::post('/logout', [AuthController::class, 'logout']);


