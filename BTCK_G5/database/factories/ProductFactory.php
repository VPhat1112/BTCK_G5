<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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

     protected $model = \App\Models\Product::class;
     
    public function definition()
    {
        $testMDM="1";

        return [
            
            //
            'product_name'=>$this->faker->name,
            'brand_id'=>$testMDM,
            'product_content'=>$this->faker->paragraph,
            'product_price'=>$this->faker->numberBetween(10000,1000000),
            'product_status'=>$this->faker->numberBetween(0,100),
            'product_desc'=>$this->faker->paragraphs,
            'product_image'=>'tivi.png',
            'category_id'=>$testMDM
        ];
    }
}