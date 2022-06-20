<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SettingController extends Controller
{
     public function edit(User $setting)
    {
         return view('menu.setting.edit', Array('setting' => Auth::user()));
    }

   
    public function update(Request $request, User $setting){
        request()->validate([
            'current-password' => 'required',
            'role_id' => 'required',
            'password' => ['required', 'confirmed','min:8' ,Rules\Password::defaults()]  
        ]);

        $newPassword = auth()->user()->password;
        $current_password = request('current-password');

        if (Hash::check($current_password, $newPassword)) {
            // auth()->user()->update([
            //     'password' => Hash::make(request('password'))
            // ]);
            User::where('id', $setting->id)->update([
             'password' => Hash::make(request('password'))
            ]);;
            return redirect('/menu/setting')->with('success', 'Password successfully changed!'); 
       
        }
    }
}