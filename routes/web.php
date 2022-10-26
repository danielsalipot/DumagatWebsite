<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [PagesController::class,'index']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/gallery', [PagesController::class,'gallery']);
Route::get('/language', [PagesController::class,'language']);
