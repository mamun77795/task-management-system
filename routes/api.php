<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::group(['middleware'=>'auth:sanctum'], function () {
//     Route::apiResource('tasks', TaskController::class);
// });

Route::apiResource('tasks', TaskController::class);

Route::post("login",[UserController::class,'login']);
Route::post("register",[UserController::class,'register']);