<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_en' => fake()->words(3, true),
            'name_ar' => fake()->words(3, true),
            'image' => 'services155752445-1677310622-camera.png',
            'content_en' => fake()->paragraphs(4, true),
            'content_ar' => fake()->paragraphs(4, true),
            'price' => fake()->numberBetween(0, 100),
            'user_id' => fake()->numberBetween(1, 20),
            'category_id' => fake()->numberBetween(1, 10),


        ];
    }
}
