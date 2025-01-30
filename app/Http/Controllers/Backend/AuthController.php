<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::guard('admin')->user()->role == 'SuperAdmin' || Auth::guard('admin')->user()->role == 'Admin') {
                return redirect()->route('admin.index');
            } else {
                Auth::guard('admin')->logout();
                return redirect('/login')->with('not', 'You are not authorized to access this page');
            }
        }
    
        return back()->with('error', 'Email or Password is incorrect');
    }
    

    public function logout()
    {

    }
}
