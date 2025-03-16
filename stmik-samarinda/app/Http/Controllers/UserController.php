<?php

namespace App\Http\Controllers;

use Svg\Tag\Rect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class UserController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:manage-roles|manage-users|manage-everything', only: ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']),
        ];
    }
    
    public function index() {
        $title = "Users";
        $users = User::where('name', '!=', 'superadmin')->get();
        return view('users.index', compact('title', 'users'));
    }

    public function create() {
        $title = "Users";
        $roles = Role::where('name', '!=', 'superadmin')->pluck('name', 'name')->all();

        return view('users.create', compact('title', 'roles'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required',
            'roles' => 'required',
        ]);

        if ($validatedData['roles'] == 'superadmin' || in_array('superadmin', array_values($validatedData['roles']))) {
            return redirect()->back()->withErrors(['roles' => 'Terjadi kesalahan pada role']);
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole($validatedData['roles']);

        return redirect()->route('users.index')->with('success', 'Berhasil menambahkan user!');
    }

    public function show($id) {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id) {
        $title = "Users";
        $user = User::find($id);
        $roles = Role::where('name', '!=', 'superadmin')->pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('title', 'user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id): RedirectResponse {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email,'.$id,
            'roles' => 'required',
        ]);

        if(!empty($request['password'])) {
            $validatedData['password'] = Hash::make($request['password']);
        }

        $user = User::find($id);
        $user->update($validatedData);

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($validatedData['roles']);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
