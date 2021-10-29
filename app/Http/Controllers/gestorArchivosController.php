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

        if ($request->file("archivoInput")) {
            
            if ($request->input("nombreInput")) {
                $nombreArchivo = $request->input("nombreInput");
            }else{
                $nombreArchivo = explode(".",$request->file("archivoInput")->getClientOriginalName())[0];
            }
            
            $extension = explode(".",$request->file("archivoInput")->getClientOriginalName())[1];
            $request->file('archivoInput')->storeAs('archivos', $nombreArchivo.".".$extension);
        
            $output = "Nombre: ".$nombreArchivo." ---> Archivo: ".$request->file("archivoInput")->getClientOriginalName();

        }else{
            $output = "";
        }

    	return view('subir',["output"=>$output]);
    }

    function descargar(Request $request){
    	print("esto es un test");

    	return view('listado');
    }
}
