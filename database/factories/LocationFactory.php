<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Generamos datos para la tabla de forma aleatoria
            'code' => $this->faker->unique()->numberBetween(1000, 9999),
            'name' => $this->faker->company,
            'image' => $this->faker->imageUrl(640, 480, 'business', true, 'sede'),
        ];
    }
}
