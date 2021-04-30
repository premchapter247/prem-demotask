<?php

namespace Database\Factories;

use App\Models\ProductDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Model::class;
    protected $model = ProductDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $size = array("L","M","XL","XXL","XXXL");
        // $random_size_key = array_random($size);
        // $random_size =  $size[$random_size_key];
        //$size= $this->faker->randomElement($array = array ("L","M","XL","XXL","XXXL"));
        // $this->faker->randomElement($array = array ("L","M","XL","XXL","XXXL")), // 'b',
        return [
            'size' => $this->faker->randomElement($array = array ('a','b','c')), // 'b',
            'color' => $this->faker->colorName(),
            'product_id' =>  function () {
                return factory(App\Models\Product::class)->create()->id;
             }
        ];
    }
}
