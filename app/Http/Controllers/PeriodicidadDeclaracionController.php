<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodicidad_declaracion;

class PeriodicidadDeclaracionController extends Controller
{
    //

    public function getData(Request $request){
   
        $Periodicidad_declaracion=Periodicidad_declaracion::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Periodicidad_declaracion
        ]);
    }
    public function getDataById(Request $request){

        $Periodicidad_declaracion= periodicidad_declaracion::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Periodicidad_declaracion
        ]);
    }
        public function save(Request $request){
    
            $Periodicidad_declaracion=Periodicidad_declaracion::create([
                'nombre'=>$request->nombre,
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Periodicidad_declaracion,
                ]);
            }
    
        public function update(Request $request){
    
            $Periodicidad_declaracion=Periodicidad_declaracion::findOrFail($request->id);
            
            $Periodicidad_declaracion->update([
                "nombre"=>$request->nombre,
            ]);
            
                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Periodicidad_declaracion=Periodicidad_declaracion::findOrFail($request->id);            
            $Periodicidad_declaracion->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }


