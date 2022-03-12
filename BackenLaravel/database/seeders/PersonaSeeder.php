<?php

namespace Database\Seeders;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $persona = new Persona();
        $persona ->Nombre ="Darwin";
        $persona ->Apellido ="Quishpe";
        $persona->cedula="175162158";
        $persona->save();
    }
}
