<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    Public function event(){
        return view('backend.pages.event');
    }
}
