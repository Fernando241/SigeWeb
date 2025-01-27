<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'documento'=>$this->faker->numberBetween(89000000, 15200000),
            'nombres'=>$this->faker->name(),
            'apellidos'=>$this->faker->lastName(),
            'telefono'=>$this->faker->numberBetween(3100000000, 3220000000),
            'direccion'=>$this->faker->address(),
            'acudiente'=>$this->faker->name()
        ];
    }
}
