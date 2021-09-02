<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothesWebController;
use App\Http\Controllers\CategoryWebController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clothes',[ClothesWebController::class, 'index']);
Route::get('/categories',[CategoryWebController::class, 'index']);

Route::get('/clothes/create',[ClothesWebController::class, 'create']);

Route::get('/clothes/{id}',[ClothesWebController::class, 'show']);
Route::get('/categories/{id}',[CategoryWebController::class, 'show']);

Route::post('/clothes',[ClothesWebController::class, 'store']);
Route::post('/categories',[CategoryWebController::class, 'store']);

Route::post('/clothes/{id}',[ClothesWebController::class, 'update']);
Route::post('/categories/{id}',[CategoryWebController::class, 'update']);