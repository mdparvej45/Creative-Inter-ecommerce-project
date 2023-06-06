<?php

namespace Database\Factories;

use App\Models\Review;
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
    protected $model = Review::class;

    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,5),
            'product_id'=>$this->faker->numberBetween(1,60),
            'comment_id'=>$this->faker->numberBetween(1,50),
            'ratings'=>$this->faker->numberBetween(1,5),
        ];
    }
}
