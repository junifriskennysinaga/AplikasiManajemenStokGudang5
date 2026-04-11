<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home'); 

Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/product', 'product');
Route::view('/dashboard', 'dashboard');
Route::view('/login', 'login');
Route::view('/register', 'register');