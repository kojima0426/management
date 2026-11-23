<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate(['name' => '文房具']);
        Category::firstOrCreate(['name' => 'OA用品']);
        Category::firstOrCreate(['name' => '日用品']);
        Category::firstOrCreate(['name' => '食品']);
        Category::firstOrCreate(['name' => '清掃用品']);
    }
}
