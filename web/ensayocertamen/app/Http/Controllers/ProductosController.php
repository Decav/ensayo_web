<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
class ProductosController extends Controller
{
    //
    public function crearProducto(Request $request){
        $input = $request->all();
        $producto = new producto();
        $producto->nombre = $input["nombre"];
        $producto->stock = $input["stock"];
        $producto->precio = $input["precio"];
        
        $producto->save();
        return $producto;
    }

    public function getProducto(){
        $producto = Producto::all();
        return $producto;
    }
}
