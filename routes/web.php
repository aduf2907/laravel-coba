<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

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

//ini buat beranda
Route::get('/', [PostsController::class, 'home']);

//ini buat posts
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts/store', [PostsController::class, 'store']);
Route::get('/posts/edit/{id}', [PostsController::class, 'edit']);
Route::put('/posts/edit/{id}', [PostsController::class, 'update']);
Route::get('/posts/delete/{id}', [PostsController::class, 'destroy']);

//buat login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);

//buat register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']); //method buat nyimpen

// Route::get('/posts', function () {
//     return view('posts.create');
// });

// Route::post('/posts', function () {
//     return view('posts.index');
// });