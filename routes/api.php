<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ApiPendidikanController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Tanpa namespace group
Route::get('api_pendidikan', [ApiPendidikanController::class, 'getAll']);
Route::get('api_pendidikan/{id}', [ApiPendidikanController::class, 'getPen']);
Route::post('api_pendidikan', [ApiPendidikanController::class, 'createPen']);
Route::put('api_pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);
Route::delete('api_pendidikan/{id}', [ApiPendidikanController::class, 'deletePen']);