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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AlbumsController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [App\Http\Controllers\AlbumsController::class, 'create'])->name('albums.create');
Route::post('/albums/store', [App\Http\Controllers\AlbumsController::class, 'store'])->name('albums.store');



