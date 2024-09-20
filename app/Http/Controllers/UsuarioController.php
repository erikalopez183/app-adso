<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //

    public function getData(Request $request){
   
        $Usuario=Usuario::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Usuario
        ]);
    }
        public function save(Request $request){
    
            $Usuario=Usuario::create([
                'nombre'=>$request->nombre, 
                'id_tercero'=>$request->id_tercero, 
                
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Usuario,
                ]);
            }
    
        public function update(Request $request){
    
            $Usuario=Usuario::findOrFail($request->id);
            
            $Usuario->update([
                'nombre'=>$request->nombre, 
                'id_tercero'=>$request->id_tercero, 
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Usuario=Usuario::findOrFail($request->id);            
            $Usuario->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }


