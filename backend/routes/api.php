<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\FrameworkController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Get User Data
Route::get("/profile", [UserController::class, 'index']);

//Update User
Route::put("/profile/user/{id}", [UserController::class, 'update']);

//Update Frameworks
Route::put("/profile/framework/{id}", [FrameworkController::class, 'update']);

//Update Hobbies
Route::put("/profile/hobbie/{id}", [HobbiesController::class, 'update']);
