<?php

use App\Http\Controllers\PostController;
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

//Route::get('/',  [BlogController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:link}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);
Route::patch('/post/{post:link}', [PostController::class, 'update']);
Route::delete('/post/{post:link}', [PostController::class, 'destroy']);
