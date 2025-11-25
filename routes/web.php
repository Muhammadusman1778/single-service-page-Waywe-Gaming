<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ServiceController;

Route::get('/', [ServiceController::class, 'index'])->name('service.page');
Route::get('/about', [ServiceController::class, 'about'])->name('about.page');
Route::get('/service-one', [ServiceController::class, 'serviceOne'])->name('service.one.page');
Route::get('/service-two', [ServiceController::class, 'serviceTwo'])->name('service.two.page');
Route::get('/service-three', [ServiceController::class, 'serviceThree'])->name('service.three.page');
Route::get('/get-quote', [ServiceController::class, 'getQuote'])->name('quote.page');
