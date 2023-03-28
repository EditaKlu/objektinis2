<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'name' => 'United Kingdom',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'United States of America',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Germany',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'France',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Italy',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
