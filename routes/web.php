<?php

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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;


Route::get('/', [EventController::class, 'index'])->middleware('auth');
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show'])->middleware('auth');
Route::post('/events', [EventController::class, 'store'])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/clients', function () {
    return view('clients.client');
});

Route::get('/clients/create', [ClientController::class, 'create'])->middleware('auth');
Route::post('/clients', [ClientController:: class, 'store'])->middleware('auth');
Route::get('/clients/{id}', [ClientController::class, 'show'])->middleware('auth');
Route::get('/clients', [ClientController::class, 'index'])->middleware('auth');


Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');


