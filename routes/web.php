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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Dashboard
Route::middleware('auth')->get('/home', App\Http\Livewire\CurrentJobs::class);

// Vervangen met multipart form
Route::middleware('auth')->get('/toevoegen', function () {return view('klusminuten.pages.addjob');});

// Show job index
Route::middleware('auth')->get('/klusvijver', App\Http\Livewire\JobIndex::class);

// Show single job
Route::middleware('auth')->get('/klusvijver/{id}', App\Http\Livewire\showJob::class);

// timer
Route::middleware('auth')->get('/stopwatch/{id}', App\Http\Livewire\NewTimer::class);

// Material
Route::middleware('auth')->get('/materiaal/{id}', App\Http\Livewire\AddMaterial::class);

// Archive
Route::middleware('auth')->get('/archief', App\Http\Livewire\Archive::class);

Route::get('/material', function () {
    return view('klusminuten.pages.material');
});
