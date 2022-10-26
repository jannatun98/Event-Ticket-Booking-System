<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    Public function location(){
        return view('backend.pages.location');
    }
}
