<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
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
            'title' => $this->faker->sentence(2),
            'slug' => Str::slug($this->faker->sentence(2)),
            'serie_id' => rand(1,6),
            'content' => $this->faker->paragraph(rand(2,4)),
            'status' => 'upload',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
