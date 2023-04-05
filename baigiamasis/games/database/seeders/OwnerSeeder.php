<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owners')->delete();

        DB::table('owners')->insert([

            [
                'name' => 'Justas',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Simonas',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Darius',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'name' => 'Gytis',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'name' => 'Julius',
                'created_at' => Date::now(),
                'updated_at' => Date::now()

            ],
            [
                'name' => 'Povilas',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
