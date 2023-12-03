<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('pages.register');
    }
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('felicidades', 'tu cuenta a sido creada correctamente');
    }
}   
