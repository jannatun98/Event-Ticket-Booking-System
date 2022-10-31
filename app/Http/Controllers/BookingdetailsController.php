<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingdetailsController extends Controller
{
    public function bookingdetails(){
        return view('backend.pages.bookingdetails');
    }
}
