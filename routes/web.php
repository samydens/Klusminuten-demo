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

// Routes which require a logged in user.
route::middleware('auth')->group( function() {

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin', App\Http\Livewire\Admin\Admin::class); // Admin panel
        Route::get('/admin/job/{id}', App\Http\Livewire\Admin\Job\ShowJobAdmin::class); // Show job admin.
        Route::get('/admin/minmat/{id}', App\Http\Livewire\Admin\MinuteMaterial::class); // Show all minute & material records for job.
        Route::get('/admin/employee/{id}', App\Http\Livewire\Admin\Employee\ShowEmployeeAdmin::class); // Show employee admin page.
        Route::get('admin/client/{id}', App\Http\Livewire\Admin\Client\ShowClientAdmin::class); // Show client admin.
        Route::get('admin/user/{id}', App\Http\Livewire\Admin\User\ShowUserAdmin::class); // Show user admin.
        Route::get('admin/role/{id}', App\Http\Livewire\Admin\Role\ShowRoleAdmin::class); // Show role admin.
    });

    Route::group(['middleware' => ['role:medewerker']], function () {
        Route::get('/toevoegen', App\Http\Livewire\NewJob::class); // Create a new job.
        Route::get('/home', App\Http\Livewire\CurrentJobs::class); // Dashboard
        Route::get('/klusvijver', App\Http\Livewire\JobIndex::class); // Klusvijver
        Route::get('/klusvijver/{id}', App\Http\Livewire\showJob::class); // Show job
        Route::get('/stopwatch/{id}', App\Http\Livewire\NewTimer::class); // Stopwatch
        Route::get('/materiaal/{id}', App\Http\Livewire\AddMaterial::class); // Materials
        Route::get('/archief', App\Http\Livewire\Archive::class); // Archive
        Route::get('/overview/{id}', App\Http\Livewire\JobOverview::class); // overview after completion
    });
    // Route::get('/admin', App\Http\Livewire\Admin::class); // Admin panel
    // Route::get('/admin/job/{id}', App\Http\Livewire\ShowJobAdmin::class); // Show Job
    // Route::get('/admin/minmat/{id}', App\Http\Livewire\MinuteMaterial::class); // Show all minute & material records for job.
    // Route::get('/admin/employee/{id}', App\Http\Livewire\ShowEmployeeAdmin::class); // Show employee admin page.
});
