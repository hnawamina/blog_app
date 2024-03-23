<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// post
Route::post('/creat/post', [PostController::class, 'store'])->name('post_store');
Route::get('/post/{post_id}/post', [PostController::class, 'show'])->name('post_show');
Route::get('/post/{post_id}/postupdateview', [PostController::class, 'updateview'])->name('post_updateview');
Route::Post('/postt/{post_id}/update', [PostController::class, 'update'])->name('post_update');
Route::get('/postt/{post_id}/delete', [PostController::class, 'delete'])->name('post_delete');
Route::get('/post/mypost', [PostController::class, 'postlist'])->name('my_post_show');
Route::get('/home', [HomeController::class, 'index'])->name('cratenewpost');
