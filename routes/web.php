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


 // Check if logged in
route::middleware('auth')->group( function() {
    
    // Edit users
    Route::group(['middleware' => ['permission:edit users']], function () {
        Route::get('/admin/user', App\Http\Livewire\UserAdmin::class)->name('admin/user'); 
        Route::get('/admin/user/{id}', App\Http\Livewire\EditUser::class)->name('admin/user/edit'); 
    });

    // Edit jobs
    Route::group(['middleware' => ['permission:edit jobs']], function () {
        Route::get('/admin/klus', App\Http\Livewire\JobAdmin::class)->name('admin/job'); 
        Route::get('/admin/klus/{id}', App\Http\Livewire\Editjob::class)->name('admin/job/edit'); // Edit page
        Route::get('/resklus', App\Http\Livewire\ResponsiveJobAdmin::class);
        
        Route::get('/testadmin', function () {
            return view('testadmin');
        });
    });
    
    // Accesible without roles or permissions
    Route::get('/', function () { 
        return redirect('/home'); // redirect to /home
    }); 

    Route::get('/toevoegen', function () {
        return view('klusminuten.pages.addjob'); // Add page
    }); 

    Route::get('/chooseemployee', App\Http\Livewire\ChooseEmployee::class); // Choose employee
    Route::get('/home', App\Http\Livewire\CurrentJobs::class); // Dashboard
    Route::get('/klusvijver', App\Http\Livewire\JobIndex::class); // Klusvijver
    Route::get('/klusvijver/{id}', App\Http\Livewire\showJob::class); // Show job
    Route::get('/stopwatch/{id}', App\Http\Livewire\NewTimer::class); // Stopwatch
    Route::get('/materiaal/{id}', App\Http\Livewire\AddMaterial::class); // Materials
    Route::get('/archief', App\Http\Livewire\Archive::class); // Archive
});
