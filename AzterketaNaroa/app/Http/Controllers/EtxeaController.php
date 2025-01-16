<?php

namespace App\Http\Controllers;

use App\Models\Etxea;
use Illuminate\Http\Request;

class EtxeaController extends Controller
{
    //

    public function showAll(){
        $etxea=Etxea::all();
    }
}
