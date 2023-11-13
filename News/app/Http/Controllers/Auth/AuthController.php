<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     public function index()
    {
        if (Auth::check() && Auth::user()->usertype == 1) {
            return view('auth.login');
        } else {
            return view('auth.login');
        }
    }

  public function postLogin(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->usertype == 1) {
            return redirect()->intended('dashboard')->with('success', 'You have successfully logged in.');
        } else {
            Auth::logout();
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
}


    public function registration()
    {
        return view('auth.registration');
    }

   public function postRegistration(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required|min:6',
    ]);

    $user = User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'usertype' => 0, // Set the default usertype to 0 (non-admin)
    ]);

    Auth::login($user);

    if ($user->usertype == 1) {
        return redirect('dashboard')->with('success', 'Registration successful. You have been logged in.');
    } else {
        return redirect('login')->with('success', 'Registration successful. You have been logged in.');
    }
}
    public function logout()
    {
        Auth::logout();

        return redirect('login')->with('success', 'You have been logged out.');
    }
}
