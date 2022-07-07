<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                 'user_id' => '1',
                 'name' => 'admin',
                 'personal_team' => '1',
            ],
            [
                 'user_id' => '1',
                 'name' => 'logistics',
                 'personal_team' => '1',
            ],
            [
                 'user_id' => '1',
                 'name' => 'finance',
                 'personal_team' => '1',
            ],
            [
                 'user_id' => '1',
                 'name' => 'core',
                 'personal_team' => '1',
            ],
            [
                 'user_id' => '1',
                 'name' => 'hr',
                 'personal_team' => '1',
            ]
            ]);
    }
}
