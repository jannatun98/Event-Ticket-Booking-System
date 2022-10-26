<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    Public function ticket(){
        return view('backend.pages.ticket');
    }
}
