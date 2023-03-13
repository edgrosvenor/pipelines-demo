<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => \Str::headline($this->faker->words(random_int(1,3), true)),
            'reliability' => $this->getReliability(),
            'age' => random_int(22, 44),
        ];
    }

    public function getReliability(): int
    {
        $seed = random_int(1, 100);

        return match(true) {
            $seed > 20 => 100,
            $seed > 10 => random_int(80,100),
            default => random_int(50, 79),
        };
    }

    public function top(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'fee' => random_int(300, 500) * 10,
                'draw' => random_int(800,1000),
            ];
        });
    }

    public function high(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'fee' => random_int(100,300) * 10,
                'draw' => random_int(500,800),
            ];
        });
    }

    public function medium(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'fee' => random_int(50,100) * 10,
                'draw' => random_int(300,500),
            ];
        });
    }

    public function low(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'fee' => random_int(20,50) * 10,
                'draw' => random_int(100,300),
            ];
        });
    }
}
