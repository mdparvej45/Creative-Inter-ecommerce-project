<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductImage::class;
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,60),
            'image' =>$this->faker->name(),
            'image_url' =>$this->faker->imageUrl(),
        ];
    }
}
