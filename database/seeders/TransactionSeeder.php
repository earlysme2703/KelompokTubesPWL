<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID employee yang ada (misalnya Kasir)
        $employee = Employee::where('name', 'Daffa Andika')->first();

        if ($employee) {
            DB::table('transactions')->insert([
                [
                    'date' => now(),
                    'branch_id' => 1,
                    'employee_id' => $employee->id,
                    'total' => 1500000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'date' => now(),
                    'branch_id' => 1,
                    'employee_id' => $employee->id,
                    'total' => 1500000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'date' => now(),
                    'branch_id' => 1,
                    'employee_id' => $employee->id,
                    'total' => 1500000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        } else {
            echo "Employee not found! Please run employee seeder first.\n";
        }
    }
}