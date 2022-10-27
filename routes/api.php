<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'v1'], function () {
    Route::group(['name' => 'slide', 'prefix' => 'slide'], function () {
        Route::get('index', [\App\Http\Controllers\Api\V1\SlideController::class, 'index']);
        Route::post('calcResult', [\App\Http\Controllers\Api\V1\SlideController::class, 'calcResult']);
    });
});
