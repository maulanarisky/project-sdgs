<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if (Auth::user()->role_id == 1 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);
           
        } elseif (Auth::user()->role_id == 2 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);

        } elseif (Auth::user()->role_id == 3 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);

        } elseif (Auth::user()->role_id == 4 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);
            
        } elseif (Auth::user()->role_id == 5 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);

        }elseif (Auth::user()->role_id == 6 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);

        }elseif (Auth::user()->role_id == 7 & Auth::user()->status=="active") {

            return redirect()->intended(RouteServiceProvider::HOME);

        }else{

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login')->with('warning', ' <b>Mohon Menunggu Akun Anda Aktif</b>');;
        }

        
    }

   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
