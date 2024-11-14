<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informacion_de_impuesto;

class InformacionDeImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Informacion_de_impuesto=Informacion_de_impuesto::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Informacion_de_impuesto
        ]);
    }
    public function getDataById(Request $request){

        $Informacion_de_impuesto= informacion_de_impuesto::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Informacion_de_impuesto
        ]);
    }
        public function save(Request $request){
    
            $Informacion_de_impuesto=Informacion_de_impuesto::create([
                'id_empresa'=>$request->id_empresa, 
                'id_tipo_declaracion'=>$request->id_tipo_declaracion,
                'id_periodicidad_declaracion'=>$request->id_periodicidad_declaracion, 
                'fecha_vencimiento_impuestos'=>$request->fecha_vencimiento_impuestos, 
                'fecha_entrega_revision'=>$request->fecha_entrega_revision, 
                'id_tercero'=>$request->id_tercero, 
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Informacion_de_impuesto,
                ]);
            }
    
        public function update(Request $request){
    
            $Informacion_de_impuesto=Informacion_de_impuesto::findOrFail($request->id);
            
            $Informacion_de_impuesto->update([
                'id_empresa'=>$request->id_empresa, 
                'id_tipo_declaracion'=>$request->id_tipo_declaracion,
                'id_periodicidad_declaracion'=>$request->id_periodicidad_declaracion, 
                'fecha_vencimiento_impuestos'=>$request->fecha_vencimiento_impuestos, 
                'fecha_entrega_revision'=>$request->fecha_entrega_revision, 
                'id_tercero'=>$request->id_tercero,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Informacion_de_impuesto=Informacion_de_impuesto::findOrFail($request->id);            
            $Informacion_de_impuesto->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
