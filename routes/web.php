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

Route::get('/test', function () {
    return view('klusminuten.pages.test');
});

Route::get('/home', function () {
    return view('klusminuten.pages.dashboard');
});

// Vervangen met multipart form
Route::middleware('auth')->get('/add', function () {return view('klusminuten.pages.addjob');});

// Show job index
Route::middleware('auth')->get('/jobs', App\Http\Livewire\JobIndex::class);

// Show single job
Route::middleware('auth')->get('/jobs/{id}', App\Http\Livewire\showJob::class);

// timer
Route::middleware('auth')->get('/stopwatch/{id}', App\Http\Livewire\Timer::class);

Route::get('/timer', function () {
    return view('klusminuten.pages.timer');
});

Route::get('/material', function () {
    return view('klusminuten.pages.material');
});
