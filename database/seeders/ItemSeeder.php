<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('name', '文房具')->firstOrFail();
        $supplier = Supplier::where('name', '株式会社a')->firstOrFail();

        $items = [
    ['item_code' => 'ITM-0001','name' => 'ボールペン','price' => 150,],
    ['item_code' => 'ITM-0002','name' => '消しゴム','price' => 100,],
    ['item_code' => 'ITM-0003', 'name' => '鉛筆', 'price' => 80],
    ['item_code' => 'ITM-0004', 'name' => 'ノート', 'price' => 200],
    ['item_code' => 'ITM-0005', 'name' => '定規', 'price' => 150],
    ['item_code' => 'ITM-0006', 'name' => 'はさみ', 'price' => 500],
    ['item_code' => 'ITM-0007', 'name' => 'のり', 'price' => 120],
    ['item_code' => 'ITM-0008', 'name' => '付箋', 'price' => 250],
    ['item_code' => 'ITM-0009', 'name' => '蛍光ペン', 'price' => 130],
    ['item_code' => 'ITM-0010', 'name' => '修正テープ', 'price' => 300],
    ['item_code' => 'ITM-0011', 'name' => 'ホチキス', 'price' => 600],
    ['item_code' => 'ITM-0012', 'name' => 'ホチキス針', 'price' => 100],
    ['item_code' => 'ITM-0013', 'name' => 'クリップ', 'price' => 180],
    ['item_code' => 'ITM-0014', 'name' => '封筒', 'price' => 220],
    ['item_code' => 'ITM-0015', 'name' => 'クリアファイル', 'price' => 100],
    ['item_code' => 'ITM-0016', 'name' => 'シャープペンシル', 'price' => 350],
    ['item_code' => 'ITM-0017', 'name' => 'シャープペン芯', 'price' => 200],
    ['item_code' => 'ITM-0018', 'name' => '色鉛筆セット', 'price' => 800],
    ['item_code' => 'ITM-0019', 'name' => 'メモ帳', 'price' => 180],
    ['item_code' => 'ITM-0020', 'name' => 'セロハンテープ', 'price' => 250],
];

     foreach ($items as $item) {
    Item::firstOrCreate(
        ['item_code' => $item['item_code']],
        [
            'name' => $item['name'],
            'category_id' => $category->id,
            'supplier_id' => $supplier->id,
            'price' => $item['price'],
        ]
    );
}
    }
}
