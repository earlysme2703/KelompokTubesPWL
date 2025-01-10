<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan role jika belum ada
        $roles = ['Admin', 'Supervisor', 'Manajer', 'Kasir', 'Gudang'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // Menambahkan pengguna (User) dengan role tertentu
        // Admin User
        $adminUser = User::firstOrCreate(
            ['email' => 'jayusman@owner.com'],
            [
                'name' => 'Jayusman',
                'password' => Hash::make('password'),
                'role' => 'Admin', // Menambahkan role
            ]
        );

        // Manager User
        $managerUser = User::firstOrCreate(
            ['email' => 'earlymaulana16@gmail.com'],
            [
                'name' => 'Muhammad Early Maulana',
                'password' => Hash::make('password'),
                'role' => 'Manajer', // Menambahkan role
            ]
        );

        // Supervisor User
        $supervisorUser = User::firstOrCreate(
            ['email' => 'farid@gmail.com'],
            [
                'name' => 'Farid Indrawan',
                'password' => Hash::make('password'),
                'role' => 'Supervisor', // Menambahkan role
            ]
        );

        // Cashier User
        $cashierUser = User::firstOrCreate(
            ['email' => 'daffa@gmail.com'],
            [
                'name' => 'Daffa Andika',
                'password' => Hash::make('password'),
                'role' => 'Kasir', // Menambahkan role
            ]
        );

        // Warehouse User
        $warehouseUser = User::firstOrCreate(
            ['email' => 'zaini@gmail.com'],
            [
                'name' => 'Zaini Atharik',
                'password' => Hash::make('password'),
                'role' => 'Gudang', // Menambahkan role
            ]
        );
    }
}
