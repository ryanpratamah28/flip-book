<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        ];

        $request -> validate([
            'nama' => 'required|min:5|max:20',
            'email' => 'required|unique:users,email', 
            'password' => 'required|min:8',
        ], $message );

        User::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);
        
        return redirect('/dashboard/admin/account')->with('success', 'Berhasil menambahkan akun admin');
    }

    public function loginAuth(Request $request)
    {   
        $message = [
            'required' => 'Please fill in the :attribute column',   
        ];

        $request->validate([
            'nama' => 'required',
            'email' => 'required|exists:users,email',
            'password' => 'required',
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

    public function editAccount($id)
    {   
        $account = User::where('id', $id)->first();
        return view('Admin.edit_account', compact('account'));
    }

    public function updateAccount(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required', 
            'password' => 'required',
        ]);

        User::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/dashboard/admin/account')->with('success', 'Akun berhasil diperbarui');
    }

    public function deleteAccount($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('deleted', 'Akun berhasil dihapus');
    }
}