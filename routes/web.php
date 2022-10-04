<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostLikeController;
Route::get('/register',[RegisterController::class ,'index'])->name('register');
Route::get('/home',function(){
    return view('home');
})->name('home');
Route::post('/register',[RegisterController::class ,'store']);
Route::get('/logout',[LogoutController::class ,'store'])->name('logout');

Route::get('/login',[LoginController::class ,'index'])->name('login');
Route::get('/posts',[Postcontroller::class ,'index'])->name('posts');
Route::delete('/posts/{post}',[Postcontroller::class ,'destroy'])->name('posts.destroy');
Route::get('/users/{user:username}/posts',[UserPostcontroller::class ,'index'])->name('users.posts');
Route::post('/posts',[Postcontroller::class ,'store'])->name('posts');
Route::post('/login',[LoginController::class ,'store']);
////middleware auth redirect the user to login page if he is not registered or logged in
Route::get('/dashboard',[DashboardController::class ,'index'])->name('dashboard')->middleware('auth');
Route::post('/posts/{post}/likes',[PostLikeController::class ,'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes',[PostLikeController::class ,'destroy'])->name('posts.likes');



Route::get('/', function () {
    return view('home');
});
