<?php

namespace Database\Seeders;

use App\Models\TypeOfVote;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TypeOfVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfVote::insert([
            [
                'id' => 1,
                'where' => 'Franchises',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'where' => 'Global',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
