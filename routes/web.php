<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','auth.login');

Route::get('/register',[RegisterUserController::class,'create']);

Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/logout',[SessionController::class,'destroy'])->name('logout');



Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store'])->name('newLogin');

        Route::middleware(['auth'])->group(function(){
        Route::get('/dashboard',[DashBoardController::class,'index']);
        Route::resource('users',UserController::class)
        ->middleware('can:manage_users');
        Route::resource('clients',ClientController::class);
        Route::resource('projects',ProjectController::class);
        Route::resource('tasks',TaskController::class);
    });

