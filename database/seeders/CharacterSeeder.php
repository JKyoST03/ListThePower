<?php

namespace Database\Seeders;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Devil My Cry 
        Character::factory()->create([
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'habilities' => '',
                'disadvantages' => '',
                'franchise_id' => '',
                'timestamps' => Carbon::now(),
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'habilities' => '',
                'disadvantages' => '',
                'franchise_id' => '',
                'timestamps' => Carbon::now(),
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'habilities' => '',
                'disadvantages' => '',
                'franchise_id' => '',
                'timestamps' => Carbon::now(),
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'habilities' => '',
                'disadvantages' => '',
                'franchise_id' => '',
                'timestamps' => Carbon::now(),
            ],
        ]);
    }
}
