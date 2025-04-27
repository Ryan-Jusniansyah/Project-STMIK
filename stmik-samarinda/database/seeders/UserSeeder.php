<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use FontLib\Table\Type\name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::firstOrCreate(['name'=>'manage-roles']);
        // Permission::firstOrCreate(['name'=>'manage-users']);
        // Permission::firstOrCreate(['name'=>'manage-everything']);

        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'author']);
        Role::firstOrCreate(['name' => 'superadmin']);

        // $adminRole->givePermissionTo(['manage-roles']);
        // $superRole->givePermissionTo(['manage-roles', 'manage-users','manage-everything']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123')
        ]);

        $admin->assignRole('admin');
        
        $author = User::create([
            'name' => 'author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('123123')
        ]);

        $author->assignRole('author');

        $superadmin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123123')
        ]);

        $superadmin->assignRole('superadmin');
    }
}
