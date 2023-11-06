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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '1234567890',
            'password' => Hash::make('password'),
            'role_id' => '1',
            'branch_id' => '2',
        ]);
    }
}
