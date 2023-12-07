<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
    return view('beranda');
});

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts/store', [PostsController::class, 'store']);
Route::get('/posts/edit/{id}', [PostsController::class, 'edit']);
Route::put('/posts/edit/{id}', [PostsController::class, 'update']);
Route::get('/posts/delete/{id}', [PostsController::class, 'destroy']);

// Route::get('/posts', function () {
//     return view('posts.create');
// });

// Route::post('/posts', function () {
//     return view('posts.index');
// });