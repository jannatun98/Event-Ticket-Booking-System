<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontend\notify;

class FrontendController extends Controller
{
    public function store(Request $request ){

        //dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'audience',
            'password'=>$request->password
        
        ]);
        return redirect()->back();
        
    }

    public function loginstore(Request $request){
        $login=$request->except('_token');

        if(Auth::attempt($login))
        {
            return redirect()->route('master');

        }
        notify()->success('Login Successful');
        return redirect()->back();

    }

    public function frontlogout(){
        auth()->logout();
        notify()->success('Logout Successful');
        return redirect()->back();
    }

}
