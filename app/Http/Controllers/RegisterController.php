<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function proses_register(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'name' => 'required',
                'email' => 'required',
                'level' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password', 'name', 'email', 'level');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == '') {
                    return redirect()->intended('');
                }
                return redirect()->intended('/');
            }

        return redirect('register')
                                ->withInput()
                                ->withErrors(['register_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}

