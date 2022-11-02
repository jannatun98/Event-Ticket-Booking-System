<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Audience;

class AudienceController extends Controller
{
    Public function audience(){
        return view('backend.pages.audience.audience');
    }

    Public function form(){
        return view('backend.pages.audience.form');
    }
    public function store(Request $request){
        Audience::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'address'=>$request->name,
            
        ]);
        return redirect()->back();
    }

}
