<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppointmentController::class, 'index']);

// Look into using
// Route::resource()
Route::resource('appointments',
    AppointmentController::class)->only([
    'create',
    'store',
]);

Route::get('/appointments', [AppointmentController::class, 'viewAll']);


// TODO: Implement all the Routes and ETC
