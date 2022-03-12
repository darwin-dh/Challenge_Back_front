<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Obtiene todos los registro de la tabla producto
   
        protected function getProduct()
        {
            return response()->json(Producto::all(), 200);
        }
}
