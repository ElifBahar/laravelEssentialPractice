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
    return view('welcome');
});

//this is a route returns a HTML snippet
Route::get('/returnHTML', function () {
    return '<h1>Welcome</h1>';
});

//this is a route returning a view with some variable
Route::get('/home', function () {
    return view('home',['name' => 'Elif']);
});

Route::get('/about', function () {
    return view('about');
});

//returning component structure home page
Route::get('/homeComponent', function () {
    return view('homeComponent');
});





