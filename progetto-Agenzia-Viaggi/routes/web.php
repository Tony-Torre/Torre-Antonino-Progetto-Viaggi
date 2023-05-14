<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AirController::class , 'welcome'])->name('welcome');

Route::get('/detailDeparture/{destinazione}', [AirController::class , 'detailDeparture'])->name('detailDeparture');

Route::get('/detailArrival/{destinazione}', [AirController::class , 'detailArrival'])->name('detailArrival');