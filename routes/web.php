<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Hash; 

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

Route::get('/',  [BlogController::class, 'index'])->name('post.index');
Route::get('/create', [BlogController::class, 'create'])->name('post.create')->middleware('auth');
Route::get('/post/{post:link}', [BlogController::class, 'show'])->name('post.show');
Route::post('/post', [BlogController::class, 'store'])->name('post.store')->middleware('auth');
Route::get('/post/{post:link}/edit', [BlogController::class, 'edit'])->name('post.edit')->middleware('auth');
Route::patch('/post/{post:link}', [BlogController::class, 'update'])->name('post.update')->middleware('auth');
Route::delete('/post/{post:link}', [BlogController::class, 'destroy'])->name('post.destroy')->middleware('auth');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/about', [AboutController::class, 'about'])->name('about');
