<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestorArchivosController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/inicio', [gestorArchivosController::class,'inicio'])->name("subir");
Route::match(['get','post'],'/subir', [gestorArchivosController::class,'subir'])->name("subir");
Route::get('/descargar', [gestorArchivosController::class,'descargar'])->name("descargar");

Route::redirect('/', 'inicio');


Route::get('pruebas', function(){
    
    $archivos=["xokas.jpg","pibe dale.webp","archivopython.py"];

    foreach($archivos as $archivo){
        $mime = Storage::disk('local')->mimeType("\archivos\\".$archivo);

        var_dump($mime);
        if(explode("/",$mime)[0]=="image"){
            print(" ES UNA IMAGEN<br>");
        }
    }
    
    
    return view('pruebas');
    });