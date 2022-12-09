<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get("/", [UserController::class, "loginView"])->middleware("userLoggedIn");
Route::get('/login', [UserController::class, "loginView"])->name("loginView")->middleware("userLoggedIn");
Route::post("/login", [UserController::class, "login"]);

Route::prefix("/admin")->name("admin.")->middleware("isLoggedIn")->group(function(){
    Route::get("welcome", [AdminController::class, "index"])->name("index");
    Route::get("logout", [AdminController::class, "logout"])->name("logout");
});

