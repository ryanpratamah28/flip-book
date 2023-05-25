<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileAdminController extends Controller
{
    public function editProfile()
    {

        return view('Admin.profile');
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());

        $message = [
            'required' => 'Please fill in the :attribute field',   
            'min' => 'Attribute must be at least :min characters long',
            'max' => 'Attributes must be filled with a maximum of :max characters',
            'exist' => 'The selected :attribute is invalid',
        ];

        $request->validate([
            'nama' => ['required', 'min:8', 'max:20'],
            'email' => ['required' ], 
            'bio' => [ 'required' ],
        ], $message);

        // Change Images 

        $image = $request->file('image_profile');

        if ($image) {
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
        
            if (!file_exists(public_path('images/profile/' . $imageName))) {
                $destinationPath = public_path('images/profile/');
                $image->move($destinationPath, $imageName);
                $uploaded = $imageName;
            } else {
                $uploaded = $image->getClientOriginalName();
            }
        } else {
            // Handle the case when no image is uploaded
            $uploaded = null;
        }

        // Update user profile 
        
        auth()->user()->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'bio' => $request->bio, 
            'image_profile' => $uploaded,
        ]);

        return back()->with('success', 'Your profile has been updated');
    }
}
