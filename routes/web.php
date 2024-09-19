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
    return view('welcome');
});

// index
Route::get('/', function () {
    return view('index');
});

// Properties
Route::get('/property', function () {
    return view('properties');
});
Route::get('/property-1', function () {
    return view('property-single');
});

// service
Route::get('/services', function () {
    return view('services');
});
