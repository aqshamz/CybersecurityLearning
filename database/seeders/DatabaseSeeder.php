<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\QuizTableSeeder;
use Database\Seeders\QuizAnswerTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            QuizTableSeeder::class,
            QuizAnswerTableSeeder::class,

        ]);
        // User::factory(10)->create();
    }
}
