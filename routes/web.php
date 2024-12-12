<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UkmController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('ukm',[UkmController::class, 'index']);
Route::get('ukm/create',[UkmController::class, 'create']);
Route::get('ukm/edit',[UkmController::class, 'edit']);

Route::get('daftar/create',[DaftarController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([Authenticate::class])->group(function() {
    Route::resource('ukm', UkmController::class);
    Route::resource('daftar', DaftarController::class);

});
