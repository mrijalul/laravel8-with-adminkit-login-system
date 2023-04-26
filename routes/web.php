<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();
Route::get('register', function () {
	return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');
	Route::get('/dashboard', function () {
		return view('home');
	})->name('dashboard');
	// Route::get('informasi/getapi', [InformasiController::class, 'getapi'])->name('informasi.getapi');
	// Route::resource('informasi', InformasiController::class)->only(['index', 'store']);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
