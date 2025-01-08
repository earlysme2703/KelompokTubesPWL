<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            BranchSeeder::class,        // Pertama, buat cabang    
            ProductSeeder::class,       // Ketiga, buat produk
            RoleSeeder::class,          // Keempat, buat role
            TransactionSeeder::class,   // Kelima, buat transaksi
            TransactionDetailSeeder::class,
        ]);
    }
}
