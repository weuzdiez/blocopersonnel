<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('index', [ApiPostController::class,'index']);
Route::post('create', [ApiPostController::class,'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
