<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideoFactory extends Factory
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
            'title' => $this->faker->sentence(rand(1,2)),
            'slug' => Str::slug($this->faker->sentence(rand(1,2))),
            'serie_id' => rand(1,6),
            'description' => $this->faker->paragraph(rand(1,2)),
            'link' => 'https://www.youtube.com/embed/N7iY-jNWeFc',
            'episode' => rand(1,10),
            'duration' => '42:32',
            'isPremium' => 0,
            // <iframe width="560" height="315" src="https://www.youtube.com/embed/N7iY-jNWeFc"></iframe>
        ];
    }
}
