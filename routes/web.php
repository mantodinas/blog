<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/post', [BlogController::class, 'create'])->name('post.create')->middleware('auth');
Route::get('/post/{post:link}', [BlogController::class, 'show'])->name('post.show');
Route::post('/post', [BlogController::class, 'store'])->name('post.store');
Route::patch('/post/{post:link}', [PostController::class, 'update']);
Route::delete('/post/{post:link}', [BlogController::class, 'destroy'])->name('post.destroy');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
