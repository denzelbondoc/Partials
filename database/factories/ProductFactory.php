<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
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
            
            'description'=>fake()->sentence($nbWords = 6, $variableNbWords = true),
            'quantity'=>fake()->randomDigit(),
            'price'=>fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
        ];
    }
}
