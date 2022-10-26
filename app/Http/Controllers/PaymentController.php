<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    Public function payment(){
        return view('backend.pages.payment');
    }
}
