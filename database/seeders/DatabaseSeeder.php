<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\VoteFactory;
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

        User::factory()->create([
            'name' => 'Dante',
            'email' => 'dante@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Goku',
            'email' => 'goku@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $this->call([
            TypeOfVoteSeeder::class,
            TypeOfCommentSeeder::class,
            FranchiseSeeder::class,
            DMCCharacterSeeder::class, 
            FFVIICharacterSeeder::class, 
            DBCharacterSeeder::class, 
            VotesSeeder::class,
        ]);
    }
}