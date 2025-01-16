<?php

namespace App\Http\Controllers;

use App\Models\Etxea;
use Illuminate\Http\Request;

class ApiEtxeaController extends Controller
{
    //
    
    public function index(){
        return response()->json(Etxea::all());
    }

    public function show ($id){
        $etxea =Etxea::findOrFail($id);
        return response()-> json($etxea);
    }

    public function delete($id)  {
        $etxea=Etxea::findOrFail($id);
        $etxea->delete();
        return response()-> json([null], status:204);
    }
}
