<?php

namespace App\Http\Controllers;

use App\Models\Bookingdetails;
use Illuminate\Http\Request;

class BookingdetailsController extends Controller
{
    public function bookingdetails(){
        $booking_details = Bookingdetails::paginate(5);
        return view('backend.pages.bookingdetails.bookingdetails',compact('booking_details'));
    }

    public function form(){
        return view('backend.pages.bookingdetails.form');

    } 

    public function store(Request $request){

        $request->validate([

            'booking_id'=>'required',
            'ticket_id'=>'required',
            'quantity'=>'required',
            'unit_price'=>'required',
            'sub_total'=>'required',
    
        ]);

        Bookingdetails::create([
            'booking_id'=>$request->booking_id,
            'ticket_id'=>$request->ticket_id,
            'quantity'=>$request->quantity,
            'unit_price'=>$request->unit_price,
            'sub_total'=>$request->quantity,
        ]);
     
        return redirect()->back();

    }

    public function delete($id){
        Bookingdetails::find($id)->delete();
        return redirect()->route('bookingdetails');

    }

    public function edit($id){
        $bookingdetail = Bookingdetails::find($id);
        return view('backend.pages.bookingdetails.edit',compact('bookingdetail'));

    }

    public function update(Request $request,$bookingdetail_id){
        $bookingdetail=Bookingdetails::find($bookingdetail_id);

        $bookingdetail->update([
            'booking_id'=>$request->booking_id,
            'ticket_id'=>$request->ticket_id,
            'quantity'=>$request->quantity,
            'unit_price'=>$request->unit_price,
            'sub_total'=>$request->sub_total,
            
            
        ]);
        return redirect()->route('bookingdetails');


    }

    public function view(){
        return view('backend.pages.bookingdetails.view');

    }
}
