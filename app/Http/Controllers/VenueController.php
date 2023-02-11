<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    Public function venue(){

        $venue_list=Venue::paginate(3);

        return view('backend.pages.venue.venue',compact('venue_list'));
    }

    public function venueform(){
        return view('backend.pages.venue.venueform');
    }

    public function store(Request $request){

        $fileName=null;
        if($request->hasFile('image'))
        {
            $fileName=date('ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        $request->validate([
            'name'=>'required',
            'capacity'=>'required',
            'address'=>'required'
        ]);



        Venue::create([
            'name'=>$request->name,
            'capacity'=>$request->capacity,
            'address'=>$request->address,
            'image'=>$fileName
            
        ]);
        return redirect()->back();

       
    }

    public function delete($id){
        // dd($id);
        $venue = Venue::find($id)->delete();
        // dd($venue);
        return back();
    }

    public function edit($id){
        $venue = Venue::find($id);
        return view('backend.pages.venue.edit',compact('venue'));

    }

    public function update(Request $request,$venue_id){

        $venue=Venue::find($venue_id);
        $fileName=$venue->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        $venue->update([
            'name'=>$request->name,
            'capacity'=>$request->capacity,
            'address'=>$request->address,
            'image'=>$fileName
            
            
        ]);
        return redirect()->route('venue')->with('message','Updated Successfully.');
    }

    public function view(){

        return view('backend.pages.venue.view');
    }
}
