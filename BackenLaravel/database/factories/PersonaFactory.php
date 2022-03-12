<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //values
            'Nombre'=>$this->faker->randomElement(['ana','pedro','juan','javier','maria']),
            'Apellido'=>$this->faker->randomElement(['ZAMBRANO','LÓPEZ','RODRÍGUEZ']),
            'cedula'=>$this->faker->randomElement(['17000001','17000002','17000003']),
        ];
    }
}
