<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/', function () {
    return redirect('/login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('userAccess:operator');
    Route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('userAccess:keuangan');
    Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('userAccess:marketing');
    Route::get('/logout', [SesiController::class, 'logout']);
});
