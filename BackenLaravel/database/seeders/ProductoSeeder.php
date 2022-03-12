<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $producto = new Producto();
        $producto->Nombre_producto = "Televicio";
        $producto->Color = "black";
        $producto->Categoria = "electrodomestico";
        $producto->save();
        
    }
}
