<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    //

    public function getData(Request $request){
   
        $Empresa=Empresa::all();

        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $Empresa
        ]);
    }
        public function save(Request $request){
    
            $Empresa=Empresa::create([
                'id_tipo_de_documento'=>$request->id_tipo_de_documento, 
                'numero'=>$request->numero,
                'id_clasificacion_tributaria'=>$request->id_clasificacion_tributaria, 
                'nombre_razon_social'=>$request->nombre_razon_social, 
                'direccion'=>$request->direccion, 
                'telefono'=>$request->telefono, 
                'id_ciudad'=>$request->id_ciudad, 
                'correo_electronico'=>$request->correo_electronico, 
                'fecha_inicio_encargo'=>$request->fecha_inicio_encargo, 
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'data' => $Empresa,
                ]);
            }
    
        public function update(Request $request){
    
            $Empresa=Empresa::findOrFail($request->id);
            
            $Empresa->update([
                'id_tipo_de_documento'=>$request->id_tipo_de_documento, 
                'numero'=>$request->numero,
                'id_clasificacion_tributaria'=>$request->id_clasificacion_tributaria, 
                'nombre_razon_social'=>$request->nombre_razon_social, 
                'direccion'=>$request->direccion, 
                'telefono'=>$request->telefono, 
                'id_ciudad'=>$request->id_ciudad, 
                'correo_electronico'=>$request->correo_electronico, 
                'fecha_inicio_encargo'=>$request->fecha_inicio_encargo, 
            ]);

                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
            $Empresa=Empresa::findOrFail($request->id);            
            $Empresa->delete();

                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
    