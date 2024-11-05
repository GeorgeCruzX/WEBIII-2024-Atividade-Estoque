<?php
// routes/web.php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Rota para exibir o formulário de login
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

// Rota para processar o login
Route::post('/login', [LoginController::class, 'login']);

// Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// Rota protegida de exemplo
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
