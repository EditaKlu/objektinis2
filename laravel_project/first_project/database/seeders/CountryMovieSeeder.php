<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountryMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country_movie')->insert([
            [
                'country_id' => 1,
                'movie_id' => 1,
            ],
            [
                'country_id' => 2,
                'movie_id' => 2,
            ],
            [
                'country_id' => 3,
                'movie_id' => 3,
            ],
            [
                'country_id' => 4,
                'movie_id' => 4,
            ],
            [
                'country_id' => 5,
                'movie_id' => 5,
            ]
        ]);
    }
}
