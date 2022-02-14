<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendFiles;
use DB;


class SendFilesController extends Controller
{
    //
    public function newsDocument (Request $request){
        try{
            DB::beginTransaction();
            $fechaActual = 
            $doc = new SendFiles;
            $doc->nombre = 'Mi nombre';//$request->get('nombre');
            //$doc->fecha = $request->;
            $doc->correo = 'Mi correo@mail.cl';//$request->get('correo');
            if($request->hasFile('pdf')){
                $documento=$request->file('pdf');
                $documento->move(public_path().'/Documentos/',$documento->getClientOriginalName());
                $doc->nombreDocumento=$documento->getClientOriginalName();
    
            }
            $doc->save();
            DB::commit();

        }catch(Exeption $error){
            DB::rolleback();    
        }
       
        // dd($request) ;// Para verificar la llegada del archivos

    }
    
}
