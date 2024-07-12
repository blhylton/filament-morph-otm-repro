<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        return [];
    }

    public function weekend(): self
    {
        return $this->state([
            'duration' => 2,
            'name' => 'Weekend Product',
        ]);
    }

    public function oneWeek(): self
    {
        return $this->state([
            'duration' => 7,
            'name' => 'One Week Product',
        ]);
    }

    public function twoWeeks(): self
    {
        return $this->state([
            'duration' => 14,
            'name' => 'Two Week Product',
        ]);
    }
}
