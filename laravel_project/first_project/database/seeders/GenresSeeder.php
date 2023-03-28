<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->delete();

        DB::table('genres')->insert([
            [
                "name" => "Romance",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Science fiction",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Comedy/drama",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Horror/Comedy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Comedy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Fantasy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
