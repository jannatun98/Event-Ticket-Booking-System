<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformersController extends Controller
{
    Public function performer(){
        return view('backend.pages.performer');
    }
}
