<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Supplier::firstOrCreate(
        ['name' => '株式会社a'],
        [
            'phone' => '00-0000-0001',
            'email' => 'a@a.com',
            'address' => '東京都新宿区サンプル1-1',
        ]
        );

        Supplier::firstOrCreate(
        ['name' => '株式会社b'],
        [
            'phone' => '00-0000-0002',
            'email' => 'b@b.com',
            'address' => '東京都新宿区サンプル1-2',
        ]
        );

        Supplier::firstOrCreate(
        ['name' => '株式会社c'],
        [
            'phone' => '00-0000-0003',
            'email' => 'c@c.com',
            'address' => '東京都新宿区サンプル1-3',
        ]
        );
    }
}
