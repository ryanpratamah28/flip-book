<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    public function changePassword()
    {
        return view('Admin.change_password');
    }

    public function updatePassword(Request $request)
    {
        $message = [
            'required' => 'Please fill in the :attribute field',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
            'exists' => 'The selected :attribute is invalid',
        ];

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
        ], $message);

        // Change password

        if (Hash::check($request->current_password, auth()->user()->password))
        {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('passwordUpdated', 'Your password has been updated');
        }
 
        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with our record',
        ]);
 
        return redirect()->back()->with('passwordUpdated', 'Your password has been updated');
    }
}
