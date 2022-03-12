<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Obtiene todos los registro de la tabla producto
   
        protected function getProducts()
        {
            $producto  = Producto::all();
            if (is_null($producto)) {
                return response()->json(['mensaje' => 'registros no encontrado'], 404);
            }
            return response()->json(Producto::all(), 200);
        }
        protected function getProductsbyid($id )    {
            $producto = Producto::find($id);
            if (is_null($producto)) {
                return response()->json(['mensaje' => 'registro no encontrado'], 404);
            }
            return response()->json($producto::find($id), 200);
        }
}
