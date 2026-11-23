<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StockMovement;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StockMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {

        $items = Item::all();
        $user = User::where('email', 'staff1@example.com')->firstOrFail();

        foreach ($items as $item) {
        StockMovement::firstOrCreate(
        [
        'item_id' => $item->id,
        'user_id' => $user->id,
        'type' => 'in',
        'quantity' => 10,
        ]
        );

        StockMovement::firstOrCreate(
        [
        'item_id' => $item->id,
        'user_id' => $user->id,
        'type' => 'out',
        'quantity' => 3,
        ]
        );

        $incoming = StockMovement::where('item_id', $item->id)
        ->where('type', 'in')
        ->sum('quantity');

        $outgoing = StockMovement::where('item_id', $item->id)
        ->where('type', 'out')
        ->sum('quantity');

        $item->stock = $incoming - $outgoing;
        $item->save();
        }
        });
    }
}
