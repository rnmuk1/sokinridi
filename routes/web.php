<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\automobile\HomeController;

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
    return view('layouts.master');
});

Route::get('/', [App\Http\Controllers\automobile\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\automobile\ContactController::class, 'index'])->name('contact');


