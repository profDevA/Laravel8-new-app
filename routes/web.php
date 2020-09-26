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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/leads', function () {
    return view('leads');
});

Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/options', function () {
    return view('options');
});

Route::get('/submit', function () {
    return view('submit');
});

Route::get('/tags', function () {
    return view('tags');
});
