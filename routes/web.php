<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Atau halaman yang Anda inginkan setelah logout
})->name('logout');



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::post('/register', [AuthController::class, 'doRegister'])->name('doRegister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('ukm', [UkmController::class, 'index'])->name('ukm.index');
Route::get('ukm',[UkmController::class, 'index']);
Route::get('ukm/create',[UkmController::class, 'create']);
Route::get('ukm/edit',[UkmController::class, 'edit']);
Route::resource('ukm', UkmController::class);



Route::get('daftar', [DaftarController::class, 'index']);
Route::get('daftar/create', [DaftarController::class, 'create'])->name('daftar.create');
Route::post('daftar/store', [DaftarController::class, 'store'])->name('daftar.store');
Route::resource('daftar', DaftarController::class);
Route::post('daftar/{id}/approve', [DaftarController::class, 'approve'])->name('daftar.approve');


// Route::post('daftar/create/{id}', [DaftarController::class, 'store'])->name('daftar.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware([Authenticate::class])->group(function () {
//     Route::resource('ukm', UkmController::class);
//     Route::resource('daftar', DaftarController::class);
//     Route::post('daftar/{id}/approve', [DaftarController::class, 'approve'])->name('daftar.approve');
// });



