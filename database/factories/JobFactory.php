<?php

namespace Database\Factories;

use App\Models\Employeer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title'=>fake()->jobTitle(),
            'employeer_id'=>Employeer::factory(),
             'salary'=>'$20.000 USD',
             'nationality'=>'yemeni'
            //
        ];
    }
}
