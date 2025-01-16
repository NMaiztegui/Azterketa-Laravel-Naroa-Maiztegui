<?php

use App\Http\Controllers\EtxeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

//Etxeak
Route::get('/etxeak-zerrenda',[EtxeaController::class,'showAll'])->name('etxea.zerrenda');