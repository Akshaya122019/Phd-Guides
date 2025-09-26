<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WebsiteController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class,'Home'])->name('home');