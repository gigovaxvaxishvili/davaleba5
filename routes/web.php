<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Models\Posts;
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

Route::resource('/', PostsController::class);
Route::resource('/admin', AdminController::class);
Route::get('/post/{id}', [PostsController::class, 'show']);
Route::get('/adminpost/{id}', [AdminController::class, 'show']);