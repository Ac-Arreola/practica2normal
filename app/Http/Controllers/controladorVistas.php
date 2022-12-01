<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller

{
    public function procesarRecuerdo(validadorDiario $req){

       return redirect('Registrar')->with('confirmacion','Procesado correctamente');
       //return $req->all();
       //return $req->path();
       //return $req->url();
       //return $req->ip();
    }
    public function showHome(){

        return view('Home');
    }
    public function showIngresar(){

        return view('Registrar');        
    }
    public function showRecuerdos(){
        return view('Recuerdo');
    }
    public function showWelcome(){
        return view('welcome');
    }
    /*public function showEliminar(){
        return view('eliminar');
    }*/
    
}
