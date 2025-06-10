<?php

namespace Database\Seeders;

use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VoteSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vote::insert([
            [
                'character_id' => 23,
                'user_id' => 1,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'character_id' => 23,
                'user_id' => 2,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'character_id' => 23,
                'user_id' => 3,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Nero
            [
                'character_id' => 6,
                'user_id' => 2,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'character_id' => 6,
                'user_id' => 3,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cloud
            [
                'character_id' => 9,
                'user_id' => 2,
                'where_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
