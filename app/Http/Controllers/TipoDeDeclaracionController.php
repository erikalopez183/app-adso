<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_De_Declaracion;

class TipoDeDeclaracionController extends Controller
{
    //

    public function getData(Request $request){
   
        $Tipo_de_declaracion=Tipo_de_declaracion::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Tipo_de_declaracion
        ]);
    }
    public function getDataById(Request $request){

        $Tipo_de_declaracion= Tipo_de_declaracion::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Tipo_de_declaracion
        ]);
    }
        public function save(Request $request){
    
            $Tipo_de_declaracion=Tipo_de_declaracion::create([
                'nombre'=>$request->nombre,
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Tipo_de_declaracion,

                ]);
            }
    
        public function update(Request $request){
    
            $Tipo_de_declaracion=Tipo_de_declaracion::findOrFail($request->id);
            
            $Tipo_de_declaracion->update([
                "nombre"=>$request->nombre,
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Tipo_de_declaracion=Tipo_de_declaracion::findOrFail($request->id);            
            $Tipo_de_declaracion->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
