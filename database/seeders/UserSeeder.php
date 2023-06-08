<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'role' => 'Admin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Employee',
                'email' => 'employee@email.com',
                'role' => 'Employee',
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
