<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToAzure()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function logout(Request $request) 
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $azureLogoutUrl = Socialite::driver('azure')->getLogoutUrl(route('login'));
        return redirect($azureLogoutUrl);
    }
}
