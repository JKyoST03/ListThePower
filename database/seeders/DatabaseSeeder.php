<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\FranchiseSeeder;
use Database\Seeders\DMCCharacterSeeder;
use Database\Seeders\FFVIICharacterSeeder;
use Database\Seeders\DBCharacterSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Lea',
            'email' => 'a@a.a',
            'password' => Hash::make('a'),
        ]);


        $this->call([
            FranchiseSeeder::class,
            DMCCharacterSeeder::class, 
            FFVIICharacterSeeder::class, 
            DBCharacterSeeder::class, 
        ]);
    }
}