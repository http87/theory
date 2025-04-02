<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheoryBookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/booking', [TheoryBookingController::class, 'month']);


?>
