<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->word(), // Cambiado a word() para obtener un nombre de producto
            'price' => $this->faker->randomFloat(2, 10, 100), // Genera un precio entre 10 y 100 con 2 decimales
            'category' => $this->faker->word(), // Puedes usar word() o un array de categorías si lo prefieres
            'quantity' => $this->faker->numberBetween(1, 50),
        ];
    }
}
