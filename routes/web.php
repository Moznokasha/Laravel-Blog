<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
/*
Route::get('/posts/{id}/edit',[postcontroller::class,"edit"] );
Route::get('/posts/{id}',[postcontroller::class,"show"] )->where('id', '[0-9]+');
Route::get('/posts', [postcontroller::class,"index"] );
Route::post('/posts', [postcontroller::class,"store"] );
Route::get("/posts/create", [postcontroller::class,"create"] );
Route::get('/posts/{id}',[postcontroller::class,"update"] );
Route::delete('/posts/{id}',[postcontroller::class,"destroy"] );
*/
Route::resource("posts",postcontroller::class)->middleware("auth");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
