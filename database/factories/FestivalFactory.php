<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Festival>
 */
class FestivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => Carbon::now()->addDays(random_int(90, 120)),
            'name' => implode(' ', [$this->getCity(), \Arr::random(['Days', 'Festival', 'Thunder', 'Power'])]),
        ];
    }

    public function big(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'price' => random_int(30, 50) * 10,
                'capacity' => random_int(30, 50) * 10,
                'acts' => 32,
            ];
        });
    }

    public function small(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'price' => random_int(10, 30) * 10,
                'capacity' => random_int(10, 30) * 10,
                'acts' => 16,
            ];
        });
    }

    public function getCity()
    {
        return \Arr::random([
            'Basel', 'Bern', 'Zürich', 'Berlin', 'Paris', 'Hamburg', 'Frankfurt', 'London', 'Manchester', 'Vienna', 'Salzburg',
            'Lucerne', 'Lausanne', 'Lugano', 'Chur'
        ]);
    }
}
