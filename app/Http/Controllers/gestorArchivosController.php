<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class gestorArchivosController extends Controller
{
    //
    function inicio(){
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
        
        $directory = "archivos";
        $arrayFicherosConCarpeta = Storage::files($directory);
        $output = [];
        foreach ($arrayFicherosConCarpeta as $nombreFicherosConCarpeta){
            array_push($output, explode("/",$nombreFicherosConCarpeta)[1]);
        }
        
    	return view('listado',["arrayArchivos"=>$output]);
    }
}
