<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ActorSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\GenresSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\GenreMovieSeeder;
use Database\Seeders\CountryMovieSeeder;
use Database\Seeders\LanguageMovieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            ActorSeeder::class,
            GenresSeeder::class,
            LanguageSeeder::class,
            CountrySeeder::class,
            CountryMovieSeeder::class,
            GenreMovieSeeder::class,
            LanguageMovieSeeder::class,
        ]);
    }
}