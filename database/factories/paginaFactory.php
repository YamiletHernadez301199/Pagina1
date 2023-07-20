<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class paginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->name(),
            "paterno" => $this->faker->lastName(),
            "email"=>$this->faker->unique()->safeEmail(),
            "titulo"=>$this->faker->word(),
            "texto"=>$this->faker->sentence(),
            "FechaNacimiento" => $this->faker->date()
        ];
    }
}
