<?php

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\SpecializationController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/doctors', [DoctorController::class, 'index'])->name('api.doctors.index');

Route::get('/doctors/{id}', [DoctorController::class, 'search'])->name('api.doctors.search');

Route::get('/doctor/{doctor}', [DoctorController::class, 'show'])->name('api.doctors.show');


//Rotta per API di specializzazioni

Route::get('/specializations', [SpecializationController::class, 'index'])->name('api.specializations.index');


//Rotta per API di Reviews

Route::get('/reviews', [ReviewController::class, 'index'])->name('api.reviews.index');

//Rotta per API di Messages
Route::post('/messages', [MessageController::class, 'store'])->name('api.messages.store');
