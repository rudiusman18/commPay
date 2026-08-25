<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('peran-pengguna', function () {
    return view('peran-pengguna');
})->name('roles');

Route::get('harga', function () {
    return view('harga');
})->name('pricing');

Route::get('bantuan', function () {
    return view('bantuan');
})->name('help');

Route::middleware('guest')->group(function (): void {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('direktori-anggota', function () {
    return view('direktori-anggota');
})->name('members');

Route::get('manajemen-tagihan', function () {
    return view('manajemen-tagihan');
})->name('invoices');

Route::get('verifikasi-pembayaran', function () {
    return view('verifikasi-pembayaran');
})->name('verification');

Route::get('laporan-keuangan', function () {
    return view('laporan-keuangan');
})->name('reports');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
