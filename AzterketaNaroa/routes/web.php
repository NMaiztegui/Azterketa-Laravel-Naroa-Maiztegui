<?php

use App\Http\Controllers\AlokatzaileaController;
use App\Http\Controllers\EtxeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('etxeak-zerrenda');
});

//Etxeak
Route::get('/',[EtxeaController::class,'showAll'])->name('etxea.zerrenda');
Route::get('/edit-etxea/{id}',[EtxeaController::class,'edit'])->name('etxea.edit');
Route::put('/edit-etxea/{id}',[EtxeaController::class,'update'])->name('etxea.update');

//Alokatzaileak
Route::get('/alokatzaileak',[AlokatzaileaController::class, 'showAll'])->name('alokatzaileak.zerrenda');
Route::get('/edit-alokailua/{id}',[AlokatzaileaController::class,'edit'])->name('alokailua.edit');
Route::put('/edit-alokailua/{id}',[AlokatzaileaController::class,'update'])->name('alokailua.update');
Route::delete('/alokailua-delete/{id}',[AlokatzaileaController::class,'delete'])->name('delete-alokailua');

