<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::prefix('pages')->group(function () {

    Route::view('/home', 'pages.home');
    Route::view('/about', 'pages.about');
    Route::view('/contact', 'pages.contact');

    Route::get('/product', [ProdukController::class, 'index']);

});