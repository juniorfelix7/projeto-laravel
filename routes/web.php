<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get ('/', [ServiceController::class, 'index']);
Route::get ('/services/create', [ServiceController::class, 'create']);

Route::get('/home', function () {
    return view('home');
});