<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actors')->delete();

        DB::table('actors')->insert([
            [
                'first_name' => 'Tom',
                'last_name' => 'Cruise',
                'date_of_birth' => '1962-07-03',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Leonardo',
                'last_name' => 'DiCaprio',
                'date_of_birth' => '1974-11-11',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Brad',
                'last_name' => 'Pitt',
                'date_of_birth' => '1963-12-18',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Anthony',
                'last_name' => 'Hopkins',
                'date_of_birth' => '1937-12-31',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Daniel',
                'last_name' => 'Radcliffe',
                'date_of_birth' => '1989-07-23',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ]);
    }
}
