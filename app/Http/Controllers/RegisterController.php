<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function proses_regis(Request $request)
        {
    
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'level' => 'max:20',
                'username' => ['required', 'min:3', 'max:255'],
                'email' => 'required|email:dns',
                'password' => 'required|min:5|max:255',
                'phone' => 'required|min:5|max:255',
                'gender' => 'required|max:255',
                'dateofbirth' => 'required|min:5|max:255'
            ]);
            // $validatedData['password'] = bcrypt($validatedData['password']);
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::create($validatedData);
    
            // $request->session()->flash('success', 'Registration successfull! Please login');
            return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
        }
       
}
