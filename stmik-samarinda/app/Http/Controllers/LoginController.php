<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // if (auth()->hasRole('author')) {
            //     return redirect()->to('berita');
            // }

            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
