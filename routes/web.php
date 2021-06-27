<?php

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

Route::get('/',
    [App\Http\Controllers\ClientController::class, 'index']
);

Route::get('/client/{id}', [App\Http\Controllers\ClientController::class, 'show']);
Route::post('/client/add', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
