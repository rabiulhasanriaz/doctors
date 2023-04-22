<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function processLogin(Request $request){
        $request->validate([
            'email' => 'required:email',
            'pass' => 'required|min:4'
        ]);

        $login_credetials = 
        [
            'email' => $request->email,
            'password' => md5($request->pass),
        ];

        $user = User::where($login_credetials)->first();
        // dd($user);
        if(!empty($user)){
            Auth::login($user);
            return redirect()->route('backend.dashboard')->with(['admin' => 'Welcome To IGL Tailor Solution']);
        }else {
            return redirect()->back()->with(['err' => 'Information Wrong']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
