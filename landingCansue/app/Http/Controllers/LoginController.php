<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('pages.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        
        if(!Auth::validate($credentials)){
            return redirect('/login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
 
    public function authenticated(Request $request, $user){
        return redirect('/');
    }
}
