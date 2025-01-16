<?php

namespace App\Http\Controllers;

use App\Models\Alokailua;
use App\Models\Etxea;
use Illuminate\Http\Request;

class AlokatzaileaController extends Controller
{
    //
    public function showAll(){
        $alokailua=Alokailua::all();
        return view('alokailuak-zerrenda', ['alokailua' => $alokailua]);
    }

    public function edit($id){
        if ($alokailua =Alokailua::findOrFail($id)){
            $etxeak=Etxea::all();
            return view ('alokailuak-edit', compact('alokailua','etxeak'));
        }
    }

    public function update(Request $request, $id){
        if ($alokailua=Alokailua::findOrFail($id)){
            $alokailua->izena=$request->izena;
            $alokailua->etxea_id=$request->etxea_id;
            $alokailua->save();
        }
        return redirect()->route('alokatzaileak.zerrenda');
    }

    public function delete ($id){
        if ($alokailua=Alokailua::findOrFail($id)){
            $alokailua->delete();
        }
        return redirect()->route('alokatzaileak.zerrenda');
    }
   
}
