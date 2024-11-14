<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificacion_Tributaria;

class ClasificacionTributariaController extends Controller
{
    //

    public function getData(Request $request){
   
        $Clasificacion_Tributaria=Clasificacion_Tributaria::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Clasificacion_Tributaria
        ]);
    }
    public function getDataById(Request $request){

        $Clasificacion_Tributaria= clasificacion_tributaria::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Clasificacion_Tributaria
        ]);
    }
        public function save(Request $request){
    
            $Clasificacion_Tributaria=Clasificacion_Tributaria::create([
                'nombre'=>$request->nombre,
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Clasificacion_Tributaria,
                ]);
            }
    
        public function update(Request $request){
    
            $Clasificacion_Tributaria=Clasificacion_Tributaria::findOrFail($request->id);
            
            $Clasificacion_Tributaria->update([
                "nombre"=>$request->nombre,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Clasificacion_Tributaria=Clasificacion_Tributaria::findOrFail($request->id);            
            $Clasificacion_Tributaria->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
    
