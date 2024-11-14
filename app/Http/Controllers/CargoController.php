<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    //

    public function getData(Request $request){
   
        $Cargo=Cargo::all();

    return response()->json([
        'status' => '200',
        'mensage' => 'data..',
        'result' => $Cargo
    ]);
}

public function getDataById(Request $request){

    $cargo= Cargo::where('id',$request->id)->get();

    return response()->json([
        'status' => '200',
        'message' => 'data..',
        'data'=> $cargo
    ]);
}
    public function save(Request $request){

        $Cargo=Cargo::create([
            'nombre'=>$request->nombre,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $Cargo,
            ]);
        }

    public function update(Request $request){

        $Cargo=Cargo::findOrFail($request->id);
            
        $Cargo->update([
                "nombre"=>$request->nombre,
            ]);

            return response()->json([
                    'status' => '200',
                    'message' => 'actualizado con exito',
         ]);
         }

    public function delete(Request $request){

        $Cargo=Cargo::findOrFail($request->id);            
        $Cargo->delete();

            return response()->json([
                    'status' => '200',
                    'message' => 'eliminado con exito',
            ]);
         }
         }
