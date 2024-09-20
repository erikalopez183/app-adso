<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //

    public function getData(Request $request){
   
        $Pais=Pais::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Pais
        ]);
    }
        public function save(Request $request){
    
            $Pais=Pais::create([
                'nombre'=>$request->nombre,
            ]);

                 return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Pais,

                ]);
            }
    
        public function update(Request $request){
    
            $Pais=Pais::findOrFail($request->id);
            
            $Pais->update([
                "nombre"=>$request->nombre,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Pais=Pais::findOrFail($request->id);            
            $Pais->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }

