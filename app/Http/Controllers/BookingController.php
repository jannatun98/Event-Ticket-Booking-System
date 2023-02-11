<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    Public function booking(){
        $bookings = Booking::paginate(2);
        return view('backend.pages.booking.booking', compact('bookings'));
    }

    public function bookingform(){
        return view('backend.pages.booking.form');

    }

    public function store(Request $request){

        $request->validate([

            'event_id'=>'required',
            'audience_id'=>'required',
            'total_price'=>'required',
    
        ]);

        Booking::create([
            'event_id'=>$request->event_id,
            'audience_id'=>$request->audience_id,
            'total_price'=>$request->total_price,
        ]);
     
        return redirect()->back();

    }

    public function delete($id){
        Booking::find($id)->delete();
        return redirect()->route('booking');

    }

    public function edit($id){
        $booking = Booking::find($id);
        return view('backend.pages.booking.edit',compact('booking'));

    }

    public function update(Request $request,$booking_id){
        $booking=Booking::find($booking_id);

        $booking->update([
            'event_id'=>$request->event_id,
            'audience_id'=>$request->audience_id,
            'total_price'=>$request->total_price,
            
            
        ]);
        return redirect()->route('booking');


    }

    public function view(){
        return view('backend.pages.booking.view');

    }


}
