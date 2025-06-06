<?php

namespace Database\Seeders;

use App\Models\Franchise;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Devil My Cry 
        Franchise::insert([
            [
                'id' => '1',
                'name' => 'Devill My Cry',
                'raw' => 'devil-my-cry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'name' => 'Dragon Ball',
                'raw' => 'dragon-ball',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'name' => 'Final Fantasy VII',
                'raw' => 'final-fantasy-vii',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
