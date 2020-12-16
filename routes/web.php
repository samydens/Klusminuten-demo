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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { // idk wat dit doet
    return view('dashboard');
})->name('dashboard');


 
    
// Admin required routes
route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/user/{id}', App\Http\Livewire\EditUser::class); // Edit user
    Route::get('/admin/klus', App\Http\Livewire\JobAdmin::class); // Job admin
    Route::get('/admin/user', App\Http\Livewire\UserAdmin::class); // User admin
    Route::get('/admin/klus/{id}', App\Http\Livewire\Editjob::class); // Edit job
});

Route::group(['middleware' => ['role:medewerker']], function () {
    Route::get('/', function (){return redirect('/home');}); // redirect to /home
    Route::get('/home', App\Http\Livewire\CurrentJobs::class); // Dashboard
    Route::get('/klusvijver', App\Http\Livewire\JobIndex::class); // Klusvijver
    Route::get('/toevoegen', function () {return view('klusminuten.pages.addjob');}); // Add job
    Route::get('/klusvijver/{id}', App\Http\Livewire\showJob::class); // Show job
    Route::get('/stopwatch/{id}', App\Http\Livewire\NewTimer::class); // Stopwatch
    Route::get('/materiaal/{id}', App\Http\Livewire\AddMaterial::class); // Materials
    Route::get('/archief', App\Http\Livewire\Archive::class); // Archive
});
