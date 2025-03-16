<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class RoleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:manage-roles|manage-users|manage-everything', only: ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']),
        ];
    }

    public function index() {
        $title = "Users' Roles";
        // $roles = Role::get();
        $roles = Role::with('permissions')->where('name', '!=', 'superadmin')->get();
        return view('roles.index', compact('title', 'roles'));
    }

    public function create() {
        // $permissions = Permission::get();
        $excludedPermissions = ['manage-everything', 'manage-roles', 'manage-users'];
        $permissions = Permission::whereNotIn('name', $excludedPermissions)->get();
        $title = "Users' Roles";
        return view('roles.create', compact('title', 'permissions'));
    }

    public function store(Request $request): RedirectResponse {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $excludedPermissions = [10, 11, 12];

        $permissionsID = array_filter(
            array_map(
                function ($value) {
                    return (int) $value;
                },
                $validatedData['permission']
            ),
            function ($permission) use ($excludedPermissions) {
                return !in_array($permission, $excludedPermissions);
            }
        );

        $role = Role::create(['name' => $validatedData['name']]);
        $role->syncPermissions($permissionsID);

        return redirect()->route('roles.index')->with('success', 'Role berhasil dibuat!');
    }

    public function show($id) {
        $role = Role::findOrFail($id);
        $rolePermissions = $role->permissions;
        return view('roles.show', compact('role', 'rolePermissions'));
    }

    public function edit($id) {
        $title = "Users' Roles";
        $role = Role::findOrFail($id);
        // $permissions = Permission::get();
        $excludedPermissions = ['manage-everything', 'manage-roles', 'manage-users'];
        $permissions = Permission::whereNotIn('name', $excludedPermissions)->get();
        $rolePermissions = $role->permissions->pluck('id')->toArray();

        return view('roles.edit', compact('title', 'role', 'permissions', 'rolePermissions'));
    }

    public function update(Request $request, $id): RedirectResponse {
        $validatedData = $request->validate([
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::findOrFail($id);
        $role->update(['name' => $validatedData['name']]);

        $permissionsID = array_map(
            function($value) { return (int)$value; },
            $validatedData['permission']
        );

        $role->syncPermissions($permissionsID);

        return redirect()->route('roles.index')->with('success', 'Role berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse {
        $role = Role::findOrFail($id);
        // dd($role);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role berhasil dihapus!');
        // return redirect()->route('roles.index');
    }
}
