<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelConfigurationController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('hotel_configuration', HotelConfigurationController::class);
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/show/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
