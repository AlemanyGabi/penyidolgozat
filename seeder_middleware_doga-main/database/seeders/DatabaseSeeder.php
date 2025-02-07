<?php

namespace Database\Seeders;
use App\Models\Destination;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'te2dawd3st@example.com',
        ]);
        User::factory()->create([
            'name' => 'user1',
            'is_Admin' => 1, //ez az admin 
            'password' => bcrypt('asd')
        ]);
        Destination::factory(50)->create();
    }
}
