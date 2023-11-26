<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'customer_name'=>$this->faker->name,
            'customer_email'=>'awatsica@example.org',
            'customer_phone'=>$this->faker->phoneNumber,
            'customer_password'=>'123',
            'Address'=>$this->faker->paragraph
        ];
    }
}
