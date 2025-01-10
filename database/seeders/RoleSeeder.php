<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Employee;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['Admin', 'Supervisor', 'Manajer', 'Kasir', 'Gudang'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        $permissions = [
            'create-product', 'read-product', 'update-product', 'delete-product',
            'create-cabang', 'read-cabang', 'update-cabang', 'delete-cabang',
            'create-pegawai', 'read-pegawai', 'update-pegawai', 'delete-pegawai',
            'create-transaksi', 'read-transaksi', 'update-transaksi', 'delete-transaksi',
            'read-stok', 'update-stok', 'manage-schedules',
        ];
        
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::findByName('Admin');
        $adminRole->givePermissionTo(Permission::all());  

        $supervisorRole = Role::findByName('Supervisor');
        $supervisorRole->givePermissionTo(['read-transaksi', 'read-stok', 'update-stok' ,'manage-schedules']);  

        $manajerRole = Role::findByName('Manajer');
        $manajerRole->givePermissionTo(['create-product', 'read-product', 'update-product', 'delete-product', 'create-pegawai', 'read-pegawai', 'update-pegawai', 'delete-pegawai']);

        $kasirRole = Role::findByName('Kasir');
        $kasirRole->givePermissionTo(['create-transaksi', 'read-transaksi']);  

        $gudangRole = Role::findByName('Gudang');
        $gudangRole->givePermissionTo(['read-stok', 'update-stok']);  

        $adminUser = User::firstOrCreate(
            ['email' => 'jayusman@owner.com'],
            [
                'name' => 'Jayusman',
                'password' => bcrypt('password'),
            ]
        );
        $adminUser->assignRole('Admin');

        $storeManager = Employee::firstOrCreate(
            ['name' => 'Muhammad Early Maulana'],
            [
                'position' => 'Manager',
                'branch_id' => 1,
            ]
        );
        $ManagerUser = User::firstOrCreate(
            ['email' => 'earlymaulana16@gmail.com'],
            [
                'name' => 'Muhammad Early Maulana',
                'password' => bcrypt('password'),
            ]
        );
        $ManagerUser->assignRole('Manajer');

        $supervisor = Employee::firstOrCreate(
            ['name' => 'Farid Indrawan'],
            [
                'position' => 'Supervisor',
                'branch_id' => 1,
            ]
        );
        $supervisorUser = User::firstOrCreate(
            ['email' => 'farid@gmail.com'],
            [
                'name' => 'Farid Indrawan',
                'password' => bcrypt('password'),
            ]
        );
        $supervisorUser->assignRole('Supervisor');

        $cashier = Employee::firstOrCreate(
            ['name' => 'Daffa Andika'],
            [
                'position' => 'Cashier',
                'branch_id' => 1,
            ]
        );
        $cashierUser = User::firstOrCreate(
            ['email' => 'daffa@gmail.com'],
            [
                'name' => 'Daffa Andika',
                'password' => bcrypt('password'),
            ]
        );
        $cashierUser->assignRole('Kasir');

        $warehouse = Employee::firstOrCreate(
            ['name' => 'Zaini Atharik'],
            [
                'position' => 'Gudang',
                'branch_id' => 1,
            ]
        );
        $warehouseUser = User::firstOrCreate(
            ['email' => 'zaini@gmail.com'],
            [
                'name' => 'Zaini Atharik',
                'password' => bcrypt('password'),
            ]
        );
        $warehouseUser->assignRole('Gudang');
    }
}