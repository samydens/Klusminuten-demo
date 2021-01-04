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


// Jetstream zooi??
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { 
    return view('dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/toevoegen', function () {
    return view('pages.add');
});

Route::get('/klusvijver', function() {
    return view('pages.klusvijver');
});