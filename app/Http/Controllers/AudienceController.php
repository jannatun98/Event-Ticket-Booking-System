<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudienceController extends Controller
{
    Public function audience(){
        return view('backend.pages.audience');
    }
}
