<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Comment::class;
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'product_id' => $this->faker->numberBetween(1,60),
            'comment' => $this->faker->sentence(25),

        ];
    }
}
