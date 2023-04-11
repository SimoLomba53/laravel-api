<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
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

Route::get('/', [GuestProjectController::class,'index']);

Route::get('/home', [AdminProjectController::class,'index'])->middleware(['auth'])->name('home');

Route::middleware('auth')
    ->prefix('/admin')
    ->name('admin.')
    ->group(function(){
         Route::resource('projs',AdminProjController::class);
    });

Route::middleware('auth')
    ->prefix('profile')
    ->name('profile.')
    ->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
