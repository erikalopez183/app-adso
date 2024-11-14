<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Departamento=Departamento::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Departamento
        ]);
    }
    public function getDataById(Request $request){

        $Departamento= departamento::where('id',$request->id)->get();
    
        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'data'=> $Departamento
        ]);
    }
        public function save(Request $request){
    
            $Departamento=Departamento::create([
                'nombre'=>$request->nombre, 
                'id_pais'=>$request->id_pais, 
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Departamento,
                ]);
            }
    
        public function update(Request $request){
    
            $Departamento=Departamento::findOrFail($request->id);
            
            $Departamento->update([
                "nombre"=>$request->nombre,
                'id_pais'=>$request->id_pais, 
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Departamento=Departamento::findOrFail($request->id);            
            $Departamento->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
    

