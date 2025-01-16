<?php

use App\Http\Controllers\EtxeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('etxeak-zerrenda');
});

//Etxeak
Route::get('/',[EtxeaController::class,'showAll'])->name('etxea.zerrenda');
Route::get('/edit-etxea/{id}',[EtxeaController::class,'edit'])->name('etxea.edit');
Route::put('/edit-etxea/{id}',[EtxeaController::class,'update'])->name('etxea.update');