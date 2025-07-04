<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'AdminCRUD',
            'email' => 'admin123@gmail.com',
            'password' => 'password',
            'status' => 'approved',
            'role_id' => '1' // Admin
        ]);
    }
}
