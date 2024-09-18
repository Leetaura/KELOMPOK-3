<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'AdminTes',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'level' => 1,
        ]);

        User::factory()->create([
            'name' => 'UserTes',
            'email' => 'user@example.com',
            'password' => Hash::make('123456'),
            'level' => 2,
        ]);
    }
}
