<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=\App\Models\Branch::class;
    public function definition()
    {
        return [
            //
            'branch_name'=>$this->faker->name,
            'branch_desc'=>$this->faker->paragraph,
            'branch_status'=>$this->faker->numberBetween(0,1)
        ];
    }
}
