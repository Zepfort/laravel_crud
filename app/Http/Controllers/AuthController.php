<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return back();
        }
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // if (Auth::check()){
        //     return back();
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userStatus = Auth::user()->status;

            if($userStatus == 'submitted'){
                return back()->withErrors([
                'email', 'Akun Anda masih menunggu persetujuan Admin'
            ]);
            } else if ($userStatus == 'rejected'){
                return back()->withErrors([
                    'email', 'Akun Anda telah ditolak admin'
                ]);
            } else {

            }
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Terjadi kesalahan, periksa kembali email atau password Anda',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        // if (!Auth::check()){
        //     return redirect('/');
        // }

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function registerView()
    {
        // if (Auth::check()){
        //     return back();
        // }
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // if (Auth::check()){
        //     return back();
        // }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->role_id = 2; //user
        $user->saveOrFail();

        return redirect('/')->with('success', 'Berhasil mendaftarkan akun, menunggu persetujuan admin');
    }
}

