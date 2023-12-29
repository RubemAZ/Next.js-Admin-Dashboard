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

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/common-questions', function () {
    return view('common-questions');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/institutional', function () {
    return view('institutional');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

