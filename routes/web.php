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

// welcome page
Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::get('/home', function () {
    return view('pages.home');
});

// add jobs, employees, customers
Route::get('/toevoegen', function () {
    return view('pages.add');
});

// klusvijver
Route::get('/klusvijver', function() {
    return view('pages.klusvijver');
});

Route::get('/klusvijver/{id}', App\Http\Livewire\ShowJob::class);

// // archief
// Route::get('/klusvijver/archief', function () {
//     return view('pages.archief');
// });


Route::get('/archief', App\http\Livewire\Archive::class);

// user admin
Route::get('/admin/gebruikers', function() {
    return view('pages.admin.user');
});

// job admin
Route::get('/admin/klus', function () {
    return view('pages.admin.job');
});

// admin home
Route::get('/admin', function () {
    return view('pages.admin.admin');
});

// // timer
// Route::get('/stopwatch/{id}', function ($id) {
//     return view('pages.timer');
// });


Route::get('/stopwatch/{id}', App\Http\Livewire\NewTimer::class);
Route::get('/materiaal/{id}', App\Http\Livewire\AddMaterial::class);

// material
Route::get('/material/{id}', function () {
    return view('material');
});