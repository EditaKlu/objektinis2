<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('language_movie')->insert([
            [
                'language_id' => 1,
                'movie_id' => 1,
            ],
            [
                'language_id' => 2,
                'movie_id' => 2,
            ],
            [
                'language_id' => 3,
                'movie_id' => 3,
            ],
            [
                'language_id' => 4,
                'movie_id' => 4,
            ],
            [
                'language_id' => 5,
                'movie_id' => 5,
            ]
        ]);
    }
}
