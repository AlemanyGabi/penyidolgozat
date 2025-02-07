<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination' => $this->faker->randomElement(["A1","a2","a3","a5","a6","a8","a9","a10"]),
            'price' => $this->faker->numberBetween("1000", "5000"),
            'departure' => $this->faker->date(),
        ];
    }
}
