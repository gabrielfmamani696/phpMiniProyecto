<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostTwoController;

// use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

// Route::get('/<ruta>', [<Nombre del controlador>::class, "<nombre del metodo del controlador que quermos conectarnos >"]);metodo del controller
Route::get('/index', [HomeController::class, "metodo"]);


Route::get('/posts', [PostController::class, "postMethod"]);

// rutas de postTwo

Route::resource('postsTwo', PostTwoController::class);
