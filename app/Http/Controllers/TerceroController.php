<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tercero;

class TerceroController extends Controller
{
    //

    public function getData(Request $request){
   
        $Tercero=Tercero::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Tercero
        ]);
    }
    public function getDataById(Request $request){

        $Tercero= tercero::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Tercero
        ]);
    }
        public function save(Request $request){
    
            $Tercero=Tercero::create([
                'id_tipo_de_documento'=>$request->id_tipo_de_documento, 
                'numero'=>$request->numero, 
                'primer_nombre'=>$request->primer_nombre, 
                'segundo_nombre'=>$request->segundo_nombre, 
                'primer_apellido'=>$request->primer_apellido, 
                'segundo_apellido'=>$request->segundo_apellido, 
                'correo_electronico'=>$request->correo_electronico, 
                'telefono'=>$request->telefono, 
                'direccion'=>$request->direccion, 
                'id_cargo'=>$request->id_cargo, 
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Tercero,
                ]);
            }
    
        public function update(Request $request){
    
            $Tercero=Tercero::findOrFail($request->id);
            
            $Tercero->update([
                'id_tipo_de_documento'=>$request->id_tipo_de_documento, 
                'numero'=>$request->numero, 
                'primer_nombre'=>$request->primer_nombre, 
                'segundo_nombre'=>$request->segundo_nombre, 
                'primer_apellido'=>$request->primer_apellido, 
                'segundo_apellido'=>$request->segundo_apellido, 
                'correo_electronico'=>$request->correo_electronico, 
                'telefono'=>$request->telefono, 
                'direccion'=>$request->direccion, 
                'id_cargo'=>$request->id_cargo, 
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Tercero=Tercero::findOrFail($request->id);            
            $Tercero->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }





