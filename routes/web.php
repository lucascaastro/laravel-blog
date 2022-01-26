<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('dashboard', [
    PostController::class,
    'index'
])->name('dashboard')->middleware('auth');

Route::get('/posts/index', [
    PostController::class,
    'index'
])->name('dashboard')->middleware('auth');

Route::get('/posts/create', [
    PostController::class,
    'create'
]);

Route::post('/posts/store', [
    PostController::class,
    'store'
])->middleware('auth');

Route::get('/posts/edit/{id}', [
    PostController::class,
    'edit'
])->middleware('auth');

Route::get('/posts/show/{id}', [
    PostController::class,
    'show'
]);

Route::post('/posts/update/{id}', [
    PostController::class,
    'update'
])->middleware('auth');

Route::get('/posts/delete/{id}', [
    PostController::class,
    'delete'
])->middleware('auth');