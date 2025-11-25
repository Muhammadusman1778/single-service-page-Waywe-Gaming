<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ServiceController;

Route::get('/', [ServiceController::class, 'index'])->name('service.page');
Route::get('/about', [ServiceController::class, 'about'])->name('about.page');
Route::get('/service-one', [ServiceController::class, 'serviceOne'])->name('about.page');
Route::get('/service-two', [ServiceController::class, 'serviceTwo'])->name('about.page');
Route::get('/service-three', [ServiceController::class, 'serviceThree'])->name('about.page');
