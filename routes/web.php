<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('user', UserController::class);
Route::apiResource('video', VideoController::class);


Route::get('file/video/{fileName}', [FileController::class, 'fileVideo']);
Route::get('file/video/thumbnail/{fileName}', [FileController::class, 'fileThumbnail']);
Route::get('file/user/{fileName}', [FileController::class, 'fileUser']);

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/regist', [AuthController::class, 'regist']);
