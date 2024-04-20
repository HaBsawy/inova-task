<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'   => fake()->randomElement([1,2,3]),
            'post_id'   => rand(1, 50000),
            'rate'      => fake()->randomElement([1,2,3,4,5]),
            'comment'   => fake()->text(),
        ];
    }
}
