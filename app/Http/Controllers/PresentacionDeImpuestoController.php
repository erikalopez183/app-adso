<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presentacion_de_impuesto;

class PresentacionDeImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Presentacion_de_impuesto=Presentacion_de_impuesto::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Presentacion_de_impuesto
        ]);
    }
    public function getDataById(Request $request){

        $Presentacion_de_impuesto= presentacion_de_impuesto::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Presentacion_de_impuesto
        ]);
    }
        public function save(Request $request){
    
            $Presentacion_de_impuesto=Presentacion_de_impuesto::create([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'fecha_presentacion_impuesto'=>$request->fecha_presentacion_impuesto, 
                'observaciones'=>$request->observaciones, 
                
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Presentacion_de_impuesto,
                ]);
            }
    
        public function update(Request $request){
    
            $Presentacion_de_impuesto=Presentacion_de_impuesto::findOrFail($request->id);
            
            $Presentacion_de_impuesto->update([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'fecha_presentacion_impuesto'=>$request->fecha_presentacion_impuesto, 
                'observaciones'=>$request->observaciones,  
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Presentacion_de_impuesto=Presentacion_de_impuesto::findOrFail($request->id);            
            $Presentacion_de_impuesto->delete();
            
                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }



