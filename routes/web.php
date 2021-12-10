<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Indexcontroller;
use  App\Http\Controllers\Homecontroller;
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

Route::get('/', [Indexcontroller::class, 'index'])->name('homepage');
Route::get('/danh-muc', [Indexcontroller::class, 'category'])->name('category');
Route::get('/the-loai', [Indexcontroller::class, 'genre'])->name('genre');
Route::get('/quoc-gia', [Indexcontroller::class, 'country'])->name('country');
Route::get('/phim', [Indexcontroller::class, 'movie'])->name('movie');
Route::get('/xem-phim', [Indexcontroller::class, 'watch'])->name('watch');
Route::get('/episode', [Indexcontroller::class, 'episode'])->name('episode');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');