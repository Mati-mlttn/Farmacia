<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminhomeController;
use App\Http\Controllers\medicamentosController;

//Vistas de usuarios - estas estan disponibles para todo mundo
Route::get('/', [HomeController::class, 'index'])->name('home.view');
Route::get('/login', [AuthController::class, 'login'])->name('login.view');
Route::get('login/google', 'App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('login/google/callback', 'App\Http\Controllers\GoogleController@handleGoogleCallback');
Route::resource('home', adminhomeController::class);
Route::resource('medicamentos', medicamentosController::class);