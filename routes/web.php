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

Route::get("/", [\App\Http\Controllers\HomepageController::class, "index"]);

Route::get("/shop", [\App\Http\Controllers\ShopController::class, "index"]);

Route::get("/contact", [\App\Http\Controllers\ContactController::class, "index"]);

Route::view("/about", "about");
