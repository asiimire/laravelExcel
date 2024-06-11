<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', [HomeController::class, 'view']);
Route::post('/import', [HomeController::class, 'import'])->name('import');
Route::get('/export', [HomeController::class, 'export'])->name('export');