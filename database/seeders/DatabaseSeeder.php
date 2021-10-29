<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Serie;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Article::factory(10)->create();
        Serie::factory(6)->create();
        Video::factory(10)->create();
    }
}
