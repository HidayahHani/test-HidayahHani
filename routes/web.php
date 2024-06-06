<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/userAuth',[UserController::class, 'loginAuth'])->name('userAuth');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/store', [UserController::class, 'storeUser'])->name('storeUser');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource('tasks', TasksController::class);
