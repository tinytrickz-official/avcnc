<?php

use App\Http\Controllers\HomeEngineerController;
use App\Http\Controllers\HomeTeamleaderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('teamlead')->middleware(['auth', 'auth.teamlead'])->group(function () {
    // Route Group for Team Lead
     Route::get('beranda', [HomeTeamleaderController::class, 'index'])->name('teamlead.dashboard');
});

Route::prefix('engineer')->middleware(['auth', 'auth.engineer'])->group(function () {
    // Route Group for Engineer
     Route::get('beranda', [HomeEngineerController::class, 'index'])->name('engineer.dashboard');
});

Route::prefix('qc')->middleware(['auth', 'auth.qc'])->group(function () {
    // Route Group for QA Engineer
});