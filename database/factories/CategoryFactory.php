<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition()
    {
        return [
            'cat_name' =>$this->faker->name(),
            'cat_slug' =>$this->faker->slug(),
            'image'=>$this->faker->name(),
            'image_url'=>$this->faker->imageUrl(),
        ];
    }
}
