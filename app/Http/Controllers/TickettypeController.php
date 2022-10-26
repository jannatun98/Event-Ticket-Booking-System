<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TickettypeController extends Controller
{
    Public function tickettype(){
        return view('backend.pages.tickettype');
    }
}
