<?php

use App\Http\Controllers\AdminController;
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

Route::view('/', 'media.create');

Route::post('/add', [AdminController::class, 'store'])->name('media.store');
Route::get('/show', [AdminController::class, 'get']);
Route::get('/deleteMedia/{id}', [AdminController::class, 'deleteMedia']);
