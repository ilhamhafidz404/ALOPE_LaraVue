<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'icon' => 'laravel',
                'color' => 'salmon',
            ],
            [
                'name' => 'React Js',
                'slug' => 'react-js',
                'icon' => 'react',
                'color' => 'lightskyblue',
            ],
            [
                'name' => 'Vue Js',
                'slug' => 'vue-js',
                'icon' => 'vuejs',
                'color' => 'lightgreen',
            ],
        ]);
    }
}
