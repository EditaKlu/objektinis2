<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre_movie')->insert([
            [
                'genre_id' => 1,
                'movie_id' => 1,
            ],
            [
                'genre_id' => 2,
                'movie_id' => 2,
            ],
            [
                'genre_id' => 3,
                'movie_id' => 3,
            ],
            [
                'genre_id' => 4,
                'movie_id' => 4,
            ],
            [
                'genre_id' => 5,
                'movie_id' => 5,
            ]
        ]);
    }
}
