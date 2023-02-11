<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
    public function login(){
        return view("auth.login");
    }
    public function loginStore(Request $req){
        
        $cradentials = $req->except("_token");
        // dd($cradentials);
        if(auth()->attempt($cradentials)){
            // dd("true");
            return redirect()->route("dashboard");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->back()->with('message', 'Logout Successful.');
    }
}
