<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('membre', MembreController::class);
Route::resource('genre', GenreController::class);
Route::get('/membre/download/{membre}', [MembreController::class,'download']);
