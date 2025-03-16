<?php

namespace Database\Seeders;

use App\Models\User;
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
