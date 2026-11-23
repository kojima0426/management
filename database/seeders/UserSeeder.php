<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
    ['email' => 'staff1@example.com'],
    ['name' => 'テスト担当者1','password' => 'password1234',]);

     User::firstOrCreate(
    ['email' => 'staff2@example.com'],
    ['name' => 'テスト担当者2','password' => 'password1234',]);

    User::firstOrCreate(
    ['email' => 'staff3@example.com'],
    ['name' => 'テスト担当者3','password' => 'password1234',]);
    }
}
