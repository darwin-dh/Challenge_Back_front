<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();}
       // $this->call(PersonaSeeder::class);
       /*
       *@factory Persona
       */         
       Persona::factory(25)->create();
        /*
       *@factory Producto
       */
       Producto::factory(25)->create();
        //$this->call(ProductoSeeder::class);

    }
}
