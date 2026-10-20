<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->withErrors(['success' => 'Вы успешно вошли в систему']);
        }

        return back()->withErrors([
            'error' => 'Неверный логин или пароль.',
        ])->onlyInput('email');
    }

    public function login()
    {
        return view('layout');
//        return view('login', ['user' => Auth::user()]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withErrors([
            'success' => 'Вы успешно вышли из системы'
        ]);
    }
}
