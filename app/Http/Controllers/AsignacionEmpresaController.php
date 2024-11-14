<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asignacion_empresa;

class AsignacionEmpresaController extends Controller
{
    //

    public function getData(Request $request){
   
        $Asignacion_empresa=Asignacion_empresa::all();

        return response()->json([
        'status' => '200',
        'mensage' => 'data..',
        'result' => $Asignacion_empresa
    ]);
}
public function getDataById(Request $request){

    $Asignacion_empresa= asignacion_empresa::where('id',$request->id)->get();

    return response()->json([
        'status' => '200',
        'message' => 'data..',
        'data'=> $Asignacion_empresa
    ]);
}
    public function save(Request $request){

        $Asignacion_empresa=Asignacion_empresa::create([
            'id_tercero'=>$request->id_tercero, 
            'id_empresa'=>$request->id_empresa, 
            
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $Asignacion_empresa,

            ]);
        }

    public function update(Request $request){

        $Asignacion_empresa=Asignacion_empresa::findOrFail($request->id);
            
        $Asignacion_empresa->update([
            'id_tercero'=>$request->id_tercero, 
            'id_empresa'=>$request->id_empresa, 
        ]);
                   return response()->json([
                    'status' => '200',
                    'message' => 'actualizado con exito',
         ]);
         }

    public function delete(Request $request){

        $Asignacion_empresa=Asignacion_empresa::findOrFail($request->id);
        $Asignacion_empresa->delete();

            return response()->json([
                    'status' => '200',
                    'message' => 'eliminado con exito',
            ]);
         }
         }
