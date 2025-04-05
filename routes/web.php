<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//rutas para apartado de tickets
Route::controller(TicketController::class)->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/tickets', 'tickets')->name('tickets');
});


Route::controller(FrontController::class)->group(function(){
    Route::get('/', 'index_login')->name('front.index_login');
});


Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('user', [BackController::class, ('index')]);
});

Route::prefix('admin')->group(function () {
    
});

require __DIR__.'/auth.php';