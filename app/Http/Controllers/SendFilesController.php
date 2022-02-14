<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendFiles;

class SendFilesController extends Controller
{
    //
    public function newsDocument (Request $request){
        try{
            DB::beginTransaction();
            $doc = new SendFiles;
            $doc->nombre = $request->get('nombre');
            $doc->fecha = $request->get('fecha');
            $doc->correo = $request->get('correo');
            if($request->hasFile('pdf')){
                $doc=$request->file('pdf');
                $doc->move(public_path().'/Documentos/',$doc->getClientOriginalName());
                $doc->documento=$archivo->getClientOriginalName();
    
            }
            $doc->save();
            DB::commit();

        }catch(Exeption $error){
            DB::rolleback();    
        }
       
        // dd($request) ;// Para verificar la llegada del archivos

    }
    
}
