<?php

namespace Database\Seeders;

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
            'name' => 'Test User1',
            'email' => 'test1@example.com',
            'password' => '12345678',
        ]);

        User::create([
            "name" => "John Doe",
            "email" => "johndoe@gmail.com",
            "password" => "Password123"
        ]);

    }
}
