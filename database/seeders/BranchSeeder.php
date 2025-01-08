<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    public function run()
    {
        DB::table('branches')->insert([
            [
                'branch_name' => 'Cianjur',
                'address' => 'Jln. Pangeran Hidayatullah',
                'city' => 'Cianjur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Sukabumi',
                'address' => 'Jl. Selabintana',
                'city' => 'Sukabumi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Jakarta',
                'address' => 'Jln Pahlawan',
                'city' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Bogor',
                'address' => 'Jl. Pajajaran',
                'city' => 'Bogor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Bandung',
                'address' => 'Jl. Braga',
                'city' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
