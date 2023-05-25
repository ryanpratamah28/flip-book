<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function dashboardAdmin() 
    {
        return view('Admin.dashboard');
    }

    public function accountManagement()
    {
        $accounts = User::all();
        return view('Admin.account_management', compact('accounts'));
    }

    public function flipbookAdmin() 
    {
        return view('Admin.flipbook_admin');
    }

    public function login() 
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Admin.account_management');
    }

    public function registerAccount(Request $request)
    {
        $message = [
            'required' => 'Please fill in the :attribute column',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
            'mixedCase' => 'The password must contain at least one uppercase and one lowercase letter',
            'numbers' => 'The password must contain at least one number',
        ];

        $request -> validate([
            'username' => ['required', 'min: 5', 'max:255', 'unique: users, username', 'alpha_dash'],
            'nama' => ['required', 'min:3'],
            'email' => ['required', 'exists:users, email'], 
            'bio' => ['required'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
        ], $message );

        User::create([
            'username' => $request->username,
            'nama' => $request -> nama,
            'email' => $request -> email,
            'bio' => $request->bio,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);
        
        return redirect('/dashboard/admin/account')->with('success', 'Berhasil menambahkan akun admin');
    }

    public function loginAuth(Request $request)
    {   
        $message = [
            'required' => 'Please fill in the :attribute column',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
            'mixedCase' => 'The password must contain at least one uppercase and one lowercase letter',
            'numbers' => 'The password must contain at least one number',
        ];

        $request->validate([
            'username' => ['required', 'min: 5', 'max:255', 'unique: users, username', 'alpha_dash'],
            'nama' => ['required', 'min:3'],
            'email' => ['required', 'exists:users, email'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
        ], $message);

        $admin = $request->only('nama', 'email', 'password');

        if(Auth::attempt($admin)) {
            return redirect()->route('dashboardAdmin');
        }else{
            return redirect()->back()->with('error', 'Gagal login, silahkan cek dan coba lagi!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function error()
    {
        return view('Layout.error');
    }

    public function deleteAccount($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('deleted', 'Akun berhasil dihapus');
    }
}
