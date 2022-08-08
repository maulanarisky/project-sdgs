<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function edit(User $profile)
    {
         return view('Menu.Profile.edit', Array('profile' => Auth::user()));
    }

   
    public function update(Request $request,User $profile)
    {  
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'no_wa' => 'required'
        ]);
        
        User::where('id', $profile->id)->update($validatedData);
        return redirect()->back()->with('success', ' Profile Berhasil di <b>Ubah</b>');
    }
}
