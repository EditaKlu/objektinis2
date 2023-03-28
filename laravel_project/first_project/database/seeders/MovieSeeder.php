<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->delete();

        DB::table('movies')->insert([

            [
                'title' => 'Titanic',
                'description' => 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
                'release_date' => '1999-11-01',
                'runtime' => 195,
                'rating' => 'PG-13',
                'image' => 'https://play-lh.googleusercontent.com/560-H8NVZRHk00g3RltRun4IGB-Ndl0I0iKy33D7EQ0cRRwH78-c46s90lZ1ho_F1soo',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'title' => 'Inception',
                'description' => 'Inception is a 2010 science fiction action film[4][5][6] written and directed by Christopher Nolan, who also produced the film with Emma Thomas, his wife.',
                'release_date' => '2010-07-08',
                'runtime' => 148,
                'rating' => 'PG-13',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt1375666%2F&psig=AOvVaw1RTy4irZNCWtCsC9bQQR04&ust=1677092778248000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCKCnrsynp_0CFQAAAAAdAAAAABAE',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'Forrest Gump is a 1994 American comedy-drama film directed by Robert Zemeckis and written by Eric Roth. ',
                'release_date' => '1994-06-23',
                'runtime' => 142,
                'rating' => 'PG-13',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZmFkMzc2NTctN2U1Ni00MzE5LWJmMzMtYWQ4NjQyY2MzYmM1XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "Scary Movie",
                'description' => "A year after disposing of the body of a man they accidentally killed, a group of dumb teenagers are stalked by a bumbling serial killer.",
                'release_date' => "2000-07-07",
                'runtime' => 88,
                'rating' => "PG-13",
                'image' => 'https://m.media-amazon.com/images/M/MV5BZmFkMzc2NTctN2U1Ni00MzE5LWJmMzMtYWQ4NjQyY2MzYmM1XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "American Pie",
                'description' => "Four teenage boys enter a pact to lose their virginity by prom night.",
                'release_date' => "1999-07-09",
                'runtime' => 95,
                'rating' => "R",
                'image' => 'https://images.moviesanywhere.com/2afb9a102853b93e2e1784e73bacabdd/8dfec5ad-fddf-45d6-95e6-8b9fb4ff3dd6.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'title' => "Harry Potter and the Deathly Hallows: Part 2",
                'description' => "Harry, Ron, and Hermione search for Voldemort's remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.",
                'release_date' => "2011-07-07",
                'runtime' => 130,
                'rating' => "PG-13",
                'image' => 'https://sanfranciscoparksalliance.org/wp-content/uploads/2022/05/Harry-Potter.png',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
