<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SubCategory::class;
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,12),
            'sub_name' => $this->faker->name(),
            'sub_slug' => $this->faker->slug(),
        ];
    }
}
