<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->middleware('auth')->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->middleware('auth')->name('ideas.update');

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->middleware('auth')->name('ideas.destroy');

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->middleware('auth')->name('ideas.comments.store');

//% Registraion
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

//% Login
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

//% Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/terms', function () {
    return view('terms');
});


