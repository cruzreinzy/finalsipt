<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\StudentsController;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/login', 'login')->name('login');
});

Route::get('/book', [BookController::class, 'index'])->middleware('auth:sanctum')->name('book');

Route::get('/students', [StudentsController::class, 'index'])->middleware('auth:sanctum')->name('students');

Route::get('/facilities', [FacilitiesController::class, 'index'])->middleware('auth:sanctum')->name('facilities');