<?php

namespace Database\Factories;

use App\Models\Product;
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
            'product_id' => $this->faker->unique()->numerify('###'),
            'product_name' => $this->faker->name,
            'details' => $this->faker->text,
            'price' => $this->faker->numerify(),
            'quantity' => $this->faker->numerify(),
            'remaining' => $this->faker->numerify(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
