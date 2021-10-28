<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumbnail' => 'default.jpg',
            'name' => $this->faker->sentence(rand(1,2)),
            'slug' => Str::slug($this->faker->sentence(rand(1,2))),
            'description' => $this->faker->paragraph(rand(1,3)),
            'created_at' => now(),

        ];
    }
}
