<?php

namespace App\Http\Controllers;

use App\Models\Backend\Configuration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function pageRegisterUser()
    {
        $configuration = Configuration::first();
        return view('frontend.modal.register', compact('configuration'));
    }

    public function pageLoginUser()
    {
        $configuration = Configuration::first();
        return view('frontend.modal.login', compact('configuration'));
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_2' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_2' => $request->password_2,
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Pendaftaran berhasil!');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Email atau password salah.');
    }
}