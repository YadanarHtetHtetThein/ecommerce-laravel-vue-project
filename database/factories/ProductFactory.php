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
    public function definition()
    {
        return [
            'category_id' => rand(1,6),
            'name' => $this->faker->name(),
            'slug' => rand(1000, 100000),
            'image' => 'images/test.png',
            'description' => $this->faker->text(),
            'price' => 1000,
            'view_count' => 100,
        ];
    }
}
