<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get("/registrasi", function () {
    return view("register");
});

Route::get("/login", function () {
    return view("userLogin");
});

Route::get("/user", function () {
    return view("user");
});

Route::get("/admin/login", function () {
});
