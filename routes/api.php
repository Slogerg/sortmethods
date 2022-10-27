<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//todo remove!
header("Access-Control-Allow-Origin: http://localhost:3000");


Route::group(['prefix' => 'v1'], function () {
    Route::group(['name' => 'slide', 'prefix' => 'slide'], function () {
        Route::get('index', [\App\Http\Controllers\Api\V1\SlideController::class, 'index']);
        Route::post('calcResult', [\App\Http\Controllers\Api\V1\SlideController::class, 'calcResult']);
    });
});
