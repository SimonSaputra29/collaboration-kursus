<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == 'SuperAdmin') {
                return redirect()->intended('/admin/dashboard');
            }elseif(Auth::user()->role == 'Admin'){
                return redirect()->intended('/admin/dashboard');
            } else {
                Auth::logout();
                return redirect('/login')->with('not', 'You are not authorized to access this page');
            }
        }

        return back()->with('error', 'Email Atau Password salah');
    }
}
