<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'role' => 'humas',
            'email' => 'humas@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::create([
            'role' => 'pengaju',
            'email' => 'hihi@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
