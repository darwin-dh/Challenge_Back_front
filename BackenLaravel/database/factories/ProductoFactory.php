<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
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
            'Nombre_producto'=>$this->faker->randomElement(['tv','cell','parlantes','mouse','led tv']),
            'Color'=>$this->faker->randomElement(['black','red','white']),
            'Categoria'=>$this->faker->randomElement(['computacion','linea blanca']),
        ];
    }
}
