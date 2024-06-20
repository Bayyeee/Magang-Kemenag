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
            'nip' => '198001042014032014',
            'nama' => 'AbdulQodir',
            'jenis_kelamin' => 'laki-laki',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        User::create([
            'nip' => '198512032015012010',
            'nama' => 'Siti Markonah',
            'jenis_kelamin' => 'perempuan',
            'email' => 'humas@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'humas',
        ]);

        // User::create([
        //     'nip' => null,
        //     'nama_admin' => 'Sukijat',
        //     'jenis_kelamin' => 'perempuan',
        //     'email' => 'hihi@gmail.com',
        //     'password' => Hash::make('12345'),
        //     'role' => 'pengaju',
        // ]);
    }
}
