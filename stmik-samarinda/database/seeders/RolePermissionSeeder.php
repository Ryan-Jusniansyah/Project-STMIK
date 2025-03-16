<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-berita']);
        Permission::create(['name' => 'edit-berita']);
        Permission::create(['name' => 'hapus-berita']);
        Permission::create(['name' => 'lihat-berita']);
        
        Permission::create(['name' => 'accept-surat-masuk']);
        Permission::create(['name' => 'reject-surat-masuk']);
        Permission::create(['name' => 'lihat-surat-masuk']);
        Permission::create(['name' => 'lihat-pendaftar']);
        Permission::create(['name' => 'print-data-pendaftar']);

        Permission::create(['name' => 'manage-roles']);
        Permission::create(['name' => 'manage-users']);
        Permission::create(['name' => 'manage-everything']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'superadmin']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('accept-surat-masuk');
        $roleAdmin->givePermissionTo('reject-surat-masuk');
        $roleAdmin->givePermissionTo('lihat-surat-masuk');
        $roleAdmin->givePermissionTo('lihat-pendaftar');
        $roleAdmin->givePermissionTo('print-data-pendaftar');

        $roleAuthor = Role::findByName('author');
        $roleAuthor->givePermissionTo('tambah-berita');
        $roleAuthor->givePermissionTo('edit-berita');
        $roleAuthor->givePermissionTo('hapus-berita');
        $roleAuthor->givePermissionTo('lihat-berita');
        $roleAuthor->givePermissionTo('lihat-surat-masuk');

        $roleSuperadmin = Role::findByName('superadmin');
        $roleSuperadmin->givePermissionTo(Permission::all());
    }
}
