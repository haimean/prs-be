<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\User;
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
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'title' => $this->faker->text(5),
            'points' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->text(50),
            'brand_id' =>  Brand::inRandomOrder()->first(),
        ];
    }
}
