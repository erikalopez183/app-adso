<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_De_Documento;

class TipodedocumentoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Tipo_de_documento=Tipo_de_documento::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Tipo_de_documento
        ]);
    }
    public function getDataById(Request $request){

        $Tipo_de_documento= Tipo_de_documento::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Tipo_de_documento
        ]);
    }
        public function save(Request $request){
    
            $Tipo_de_documento=Tipo_de_documento::create([
                'nombre'=>$request->nombre,
            ]);

                return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Tipo_de_documento,

                ]);
            }
    
        public function update(Request $request){
    
            $Tipo_de_documento=Tipo_de_documento::findOrFail($request->id);
            
            $Tipo_de_documento->update([
                "nombre"=>$request->nombre,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Tipo_de_documento=Tipo_de_documento::findOrFail($request->id);            
            $Tipo_de_documento->delete();
                       
            return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }

