<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $model = Category::class;
  
    /* @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'name' => fake()->sentence(),
            'description'=> fake()->paragraph()

        ];
        
        
    }
}
