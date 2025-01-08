<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaction_details')->insert([
            [
                'transaction_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'price' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_id' => 1,
                'product_id' => 2,
                'quantity' => 2,
                'price' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_id' => 1,
                'product_id' => 3,
                'quantity' => 10,
                'price' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
