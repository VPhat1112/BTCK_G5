<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoaiThietBi>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=\App\Models\Category::class;
    
    public function definition()
    {
        return [
            //
            'category_name'=>$this->faker->name,
            'category_desc'=>$this->faker->name,
            'category_status'=>$this->faker->numberBetween(0,1)
        ];
    }
}
