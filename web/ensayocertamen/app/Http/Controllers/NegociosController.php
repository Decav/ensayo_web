<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\negocio;
class NegociosController extends Controller
{
    //
    public function crearNegocios(Request $request){
        $input = $request->all();
        $negocio = new Negocio();
        $negocio->patente = $input["patente"];
        $negocio->nombre = $input["nombre"];
        $negocio->direccion = $input["direccion"];
        $negocio->numero = $input["numero"];
        
        $negocio->save();
        return $negocio;

    }

    public function getNegocio(){
        $negocio = Negocio::all();
        return $negocio;
    }

    public function eliminarNegocio(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $negocio = Negocio::findOrFail($id);
        $negocio->delete();
        return "ok";
    }
}
