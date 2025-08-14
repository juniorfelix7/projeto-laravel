<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AnuncioController;

Route::get ('/', [AnuncioController::class, 'index']);
Route::get ('/anuncios/create', [AnuncioController::class, 'create']);
Route::get ('/anuncios/{id}', [AnuncioController::class, 'show']);
Route::post('/anuncios', [AnuncioController::class, 'store']);

Route::get('/home', function () {
    return view('home');
});