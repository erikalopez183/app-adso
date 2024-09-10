<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoDeImpuestoController extends Controller
{
    //

    public function getData(Request $request){
   
        $rta= 10+20;
        return response()->json([
            'status' => '200',
            'mensage' => 'data..',
            'result' => $rta
        ]);
    }
        public function save(Request $request){
    
            $rta= 10+20;
            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                ]);
            }
    
        public function update(Request $request){
    
                $rta= 10+20;
                return response()->json([
                        'status' => '200',
                        'message' => 'actualizado con exito',
             ]);
             }
    
        public function delete(Request $request){
    
                $rta= 10+20;
                return response()->json([
                        'status' => '200',
                        'message' => 'eliminado con exito',
                ]);
             }
             }
