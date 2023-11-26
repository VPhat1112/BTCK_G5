<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=\App\Models\Brand::class;
    public function definition()
    {
        return [
            //
            'brand_name'=>$this->faker->name,
            'brand_desc'=>$this->faker->paragraph,
            'brand_status'=>$this->faker->numberBetween(0,1)
        ];
    }
}
