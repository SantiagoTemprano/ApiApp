<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peticion>
 */
class PeticionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->word,
            'categoria' => $this->faker->text(50),
            'descripcion' => $this->faker->text(200),
            'autor' => $this->faker->name,
            'firmas' => $this->faker->numberBetween(0, 10000),
        ];
    }
}
