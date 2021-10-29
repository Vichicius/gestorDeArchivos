<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gestorArchivosController extends Controller
{
    //
    function inicio(){
    	print("esto es un test");

    	return view('inicio');
    }
    function subir(Request $request){
        if ($request->input("archivoInput")) {
            if ($request->input("nombreInput")) {
                $nombreArchivo = $request->input("nombreInput");
            }else{
                $nombreArchivo = explode(".",$request->input("archivoInput"))[0];
            }
            
            $output = $nombreArchivo." ---> ".$request->input("archivoInput");
        }else{
            $output = "";
        }
        var_dump($request->input("nombreInput"));
        var_dump($request->file("archivoInput"));
        
        if ($request->file('archivoInput')){
            print("entra");
            $request->file('archivoInput')->store('archivos');
        }


    	return view('subir',["output"=>$output]);
    }
    function descargar(Request $request){
    	print("esto es un test");

    	return view('listado');
    }
}
