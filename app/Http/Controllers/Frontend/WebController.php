<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function front(){
        return view('frontend.fixed.home');
    }

   
}
