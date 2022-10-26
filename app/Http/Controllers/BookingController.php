<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    Public function booking(){
        return view('backend.pages.booking');
    }
}
