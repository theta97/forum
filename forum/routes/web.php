<?php

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcomehome');
Route::post('editprofile', [App\Http\Controllers\WelcomeController::class, 'store'])->name('welcome.store');
Route::get('/forum/{id}', 'App\Http\Controllers\ForumController@show')->name('fshow');
Route::get('/threads/{id}', 'App\Http\Controllers\ThreadController@show')->name('tshow');
Route::post('/threads', [App\Http\Controllers\ThreadController::class, 'store'])->name('threads.store');
Route::post('/threads/update', [App\Http\Controllers\ThreadController::class, 'update'])->name('threads.update');
Route::post('/threads/delete', [App\Http\Controllers\ThreadController::class, 'destroy'])->name('threads.delete');
Route::post('/threads/post', [App\Http\Controllers\PostsController::class, 'store'])->name('post.store');
Route::get('/profile', 'App\Http\Controllers\WelcomeController@show')->name('showprofile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
