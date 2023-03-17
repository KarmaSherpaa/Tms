<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdmin = Role::create(['name' => 'super-admin','guard_name'=>'web']);
        $normalUser = Role::create(['name' => 'normal-user','guard_name'=>'web']);
        $supervisor = Role::create(['name' => 'provinceUser','guard_name'=>'web']);

        $user = User::create(
            [
                'name' => 'super Admin',
                'email' => 'ksherpa24@gmail.com',
                'password' => Hash::make('password')
            ]
        );
        
        $user->assignRole([$superAdmin]);
    }
}
