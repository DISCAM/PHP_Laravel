<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternalEventsController;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index']);
Route::get('/internal-events', [InternalEventsController::class, 'index']);
Route::get('/internal-events/edit/{id}',[InternalEventsController::class, 'editView']);
Route::post('/internal-events/create', [InternalEventsController::class, 'addToDb']);
Route::get('/internal-events/create', [InternalEventsController::class, 'createView']);
Route::delete('/internal-events/delete/{id}', [InternalEventsController::class,'delete']);
