<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $random_number = rand(1, 100);

        if ($random_number % 2 == 0) {
            $result = "even";
        } else {
            $result = "odd";
        }

        return [
            'title' => fake()->title(),
            'image_path' => $result == 'odd' ? '/gallery/dummy-2195526_1280.jpg' : '/gallery/list2.png',
        ];
    }
}
