<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Revision_impuesto;

class RevisionImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Revision_impuesto=Revision_impuesto::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Revision_impuesto
        ]);
    }
        public function save(Request $request){
    
            $Revision_impuesto=Revision_impuesto::create([
                'id_empresa'=>$request->id_empresa, 
                'id_tipo_de_declaracion'=>$request->id_tipo_de_declaracion, 
                'fecha_recibido_revision'=>$request->fecha_recibido_revision, 
                'id_tercero'=>$request->id_tercero, 
                'valor_impuesto'=>$request->valor_impuesto, 
                'valor_saldo_favor'=>$request->valor_saldo_favor, 
                'valor_sancion'=>$request->valor_sancion, 
                'observaciones'=>$request->observaciones, 
                 
            ]);
            
            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Revision_impuesto,
                ]);
            }
    
        public function update(Request $request){
    
            $Revision_impuesto=Revision_impuesto::findOrFail($request->id);
            
            $Revision_impuesto->update([
                'id_empresa'=>$request->id_empresa, 
                'id_tipo_de_declaracion'=>$request->id_tipo_de_declaracion, 
                'fecha_recibido_revision'=>$request->fecha_recibido_revision, 
                'id_tercero'=>$request->id_tercero, 
                'valor_impuesto'=>$request->valor_impuesto, 
                'valor_saldo_favor'=>$request->valor_saldo_favor, 
                'valor_sancion'=>$request->valor_sancion, 
                'observaciones'=>$request->observaciones,  
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Revision_impuesto=Revision_impuesto::findOrFail($request->id);            
            $Revision_impuesto->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }




