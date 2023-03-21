<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->slug,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'excerpt' => $this->faker->paragraph,
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'featured' => $this->faker->boolean(),
            'flash_deals' => $this->faker->boolean(),
            'last_minute' => $this->faker->boolean(),
        ];
    }
}