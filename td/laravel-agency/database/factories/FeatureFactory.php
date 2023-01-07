<?php

namespace Database\Factories;

use App\Enums\Colors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => fake()->word(),
            'is_required' => fake()->boolean(10),
            'color' => Colors::cases()[fake()->randomDigit() % count(Colors::enum())]->value
        ];
    }
}
