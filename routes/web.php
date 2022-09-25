<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.Home');
});

Route::get('/Application name', function () {
    return view('pages.Laravel Application');
});

Route::get('/Developer', function () {
    return view('pages.Developer');
});

