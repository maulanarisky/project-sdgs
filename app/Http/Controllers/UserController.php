<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('menu.user.index', [
            'users' => User::Where('role_id', '!=', 1)->get()
        ]);
    }

    public function create()
    {
        return view('menu.user.create', [
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:8',
            'role_id' => 'required',
            'status' => 'required',
            'no_wa' => 'required|max:20'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/menu/user')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('menu.user.edit', [
            'user' => User::where('id','=', $id)->first(),
            'roles' => Role::all()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'no_wa' => 'required|max:20',
            'role_id' => 'required',
            'status' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/menu/user')->with('success', ' Berhasil di <b>Ubah</b>');   
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/menu/user')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
