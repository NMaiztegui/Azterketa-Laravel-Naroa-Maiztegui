<?php

namespace App\Http\Controllers;

use App\Models\Etxea;
use Illuminate\Http\Request;

class EtxeaController extends Controller
{
    //

    public function showAll(){
        $etxeak=Etxea::all();
        return view('etxeak-zerrenda', ['etxeak' => $etxeak]);
    }
    public function edit($id){
        if ($etxea =Etxea::findOrFail($id)){
            return view ('etxea-edit', compact('etxea'));
        }
    }

    public function update(Request $request, $id){
        if ($etxea=Etxea::findOrFail($id)){
            $etxea ->helbidea=$request->helbidea;
            $etxea->logela_kopurua=$request->logela_kopurua;
            $etxea->eraikuntza_urtea=$request->eraikuntza_urtea;
            $etxea->save();
        }
        return redirect()->route('etxea.zerrenda');
    }
}
