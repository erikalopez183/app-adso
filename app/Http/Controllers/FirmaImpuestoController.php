<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Firma_impuesto;

class FirmaImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Firma_impuesto=Firma_impuesto::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Firma_impuesto
        ]);
    }
        public function save(Request $request){
    
            $Firma_impuesto=Firma_impuesto::create([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'id_tercero'=>$request->id_tercero, 
                'fecha_firma_impuesto'=>$request->fecha_firma_impuesto, 
                'observaciones'=>$request->observaciones, 
                
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Firma_impuesto,
                ]);
            }
    
        public function update(Request $request){
    
            $Firma_impuesto=Firma_impuesto::findOrFail($request->id);
            
            $Firma_impuesto->update([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'id_tercero'=>$request->id_tercero, 
                'fecha_firma_impuesto'=>$request->fecha_firma_impuesto, 
                'observaciones'=>$request->observaciones,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Firma_impuesto=Firma_impuesto::findOrFail($request->id);            
            $Firma_impuesto->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
    