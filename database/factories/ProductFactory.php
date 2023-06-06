<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Pest\Laravel\get;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'category_id'=> $this->faker->numberBetween(1,12),
            'sub_category_id' =>$this->faker->numberBetween(1,20),
            'title' =>$this->faker->name(),
            'slug_unique' =>$this->faker->slug(),
            'image'=>$this->faker->name(),
            'image_url'=> $this->faker->imageUrl(),
            'sku'=> $this->faker->uuid,
            'stock'=>$this->faker->numberBetween(60,80),
            'purchase_price'=>$this->faker->numberBetween(1,1000),
            'intial_stock'=>$this->faker->numberBetween(60,80),
            'left_stock'=>$this->faker->numberBetween(1,10),
            'description'=>$this->faker->sentence(30),
            'product_tag'=>$this->faker->name(),
            'specification'=>$this->faker->sentence(30),
            'banner'=>$this->faker->numberBetween(0,1),
            'featured'=>$this->faker->numberBetween(0,1),
            'trending'=>$this->faker->numberBetween(0,1),
            'deals_of_the_day'=>$this->faker->numberBetween(0,1),
        ];
    }
}
