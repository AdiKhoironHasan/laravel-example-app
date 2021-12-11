<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adi Khoiron Hasan",
        "email" => "adieron97@gmail.com",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// defaultnya jika mengetikan {post} saja, maka yang akan dicari adalah id, dan jika diketikan {post:slug} yang dicari adalah slug nya
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
