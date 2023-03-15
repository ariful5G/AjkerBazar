<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     // একই ডাটা পাওয়ার জন্য
    // public function definition(): array
    // {
    //     return [
    //         'title'=>'Men',
    //         'description'=>'Men Description'
    //     ];
    // }

    // ভিবিন্ন্য ডাটা পাওয়ার জন্য
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word,
            'description'=>$this->faker->paragraph    
        ];
    }
}
