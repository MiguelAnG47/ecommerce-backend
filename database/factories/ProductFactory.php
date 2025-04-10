<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => fake()->sentence(), // Genera una palabra aleatoria
            'description' => fake()->paragraph(), // Genera un párrafo aleatorio
            'price' => fake()->randomFloat(2, 10000, 3000000),
            'url_image'=>fake()->imageUrl(640,400,'products',true), // Precio entre 1 y 1000 con 2 decimales
            'category_id' => Category::inRandomOrder()->first()->id, // Asume que tienes un modelo Category
        ];
    }
}
