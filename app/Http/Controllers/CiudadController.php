<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    //

    public function getData(Request $request){
   
        $Ciudad=Ciudad::all();

    return response()->json([
        'status' => '200',
        'mensage' => 'data..',
        'result' => $Ciudad
    ]);
}
    public function save(Request $request){

        $Ciudad=Ciudad::create([
            'nombre'=>$request->nombre, 
            'id_departamento'=>$request->id_departamento, 
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $Ciudad,
            ]);
        }

    public function update(Request $request){

        $Ciudad=Ciudad::findOrFail($request->id);
            
        $Ciudad->update([
            "nombre"=>$request->nombre,
            'id_departamento'=>$request->id_departamento,
        ]);

            return response()->json([
                    'status' => '200',
                    'message' => 'actualizado con exito',
         ]);
         }

    public function delete(Request $request){

        $Ciudad=Ciudad::findOrFail($request->id);            
        $Ciudad->delete();

            return response()->json([
                    'status' => '200',
                    'message' => 'eliminado con exito',
            ]);
         }
         }
