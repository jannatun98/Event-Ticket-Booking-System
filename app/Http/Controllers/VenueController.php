<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    Public function venue(){
        return view('backend.pages.venue');
    }
}
