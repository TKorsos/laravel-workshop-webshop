<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $price = $this->faker->numberBetween(1000, 50000);
        $name = $this->faker->words(3, true);
    return [
        'name' => $name,
        'slug' => Str::slug($name), 
        'sku' => Str::random(6),  
        'description' => $this->faker->paragraph(),
        'price' => $price,
        'hot_price' => 0, 
        'selling_price' => $price,
        'category_id' => rand(1,10),  
        'manufacturer_id' => 0,  
        'created_at' => now(),
        'updated_at' => now(),
    ];
    }
}
