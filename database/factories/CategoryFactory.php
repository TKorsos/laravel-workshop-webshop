<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(2, true);
        return [
            'parent_id' => 0,  
            'name' => $name,  
            'slug' => Str::slug($name), 
            'description' => $this->faker->sentence(),
            'image' => 'https://picsum.photos/640/480?random=' . $this->faker->unique()->numberBetween(1, 10000),// random kép URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
