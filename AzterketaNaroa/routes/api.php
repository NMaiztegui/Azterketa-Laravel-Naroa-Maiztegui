<?php

use App\Http\Controllers\ApiEtxeaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//denak erakutsi
Route::get('/etxea', [ApiEtxeaController::class,'index']);
Route::get('/etxea/{id}', [ApiEtxeaController::class,'show']);

Route:: delete('etxea/{id}',[ApiEtxeaController::class,'delete']);
