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
         return view('menu.profile.edit', Array('profile' => Auth::user()));
    }

   
    public function update(Request $request,User $profile)
    {
       
        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'role_id' => 'string',
            'no_wa' => 'number'
        ]);

       

        User::where('id', $profile->id)->update($validatedData);

        return redirect('/menu/profile');
    }
}
