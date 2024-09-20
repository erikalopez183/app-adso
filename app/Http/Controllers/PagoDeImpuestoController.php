<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pago_de_impuesto;

class PagoDeImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Pago_de_impuesto=Pago_de_impuesto::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Pago_de_impuesto
        ]);
    }
        public function save(Request $request){
    
            $Pago_de_impuesto=Pago_de_impuesto::create([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'fecha_pago_impuesto'=>$request->fecha_pago_impuesto, 
                'observaciones'=>$request->observaciones, 
                
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Pago_de_impuesto,
                ]);
            }
    
        public function update(Request $request){
    
            $Pago_de_impuesto=Pago_de_impuesto::findOrFail($request->id);
            
            $Pago_de_impuesto->update([
                'id_empresa'=>$request->id_empresa, 
                'id_revision_impuestos'=>$request->id_revision_impuestos, 
                'fecha_pago_impuesto'=>$request->fecha_pago_impuesto, 
                'observaciones'=>$request->observaciones,
            ]);
                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Pago_de_impuesto=Pago_de_impuesto::findOrFail($request->id);            
            $Pago_de_impuesto->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
