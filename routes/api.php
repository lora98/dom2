<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apis\ClothesRestController;
use App\Http\Controllers\apis\CategoryRestController;


Route::apiResources([
    'clothes'=>ClothesRestController::class,
    'categories'=>CategoryRestController::class
]);