<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Adi Khoiron Hasan",
        "email" => "adieron97@gmail.com",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// defaultnya jika mengetikan {post} saja, maka yang akan dicari adalah id, dan jika diketikan {post:slug} yang dicari adalah slug nya
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
// Route::get('/authors/{author:username}', ([UserController::class, 'show']));

Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/authors', [UserController::class, 'index']);

// penamaan route dengan name('namaRoute)
// untuk menangani guest yang mencoba ke halaman auth ada di app/Http/Middleware/Authenticate.php
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// hanya bisa di akses oleh user yang belum ter authentifikasi
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// hanya bisa di akses oleh user yang sudah ter authentifikasi
Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
