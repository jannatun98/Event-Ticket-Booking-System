<?php

namespace App\Http\Controllers;

use App\Models\Eventtype;
use Illuminate\Http\Request;

class EventtypeController extends Controller
{
    public function eventtype(){
        $event_types=Eventtype::paginate(5);
        return view('backend.pages.eventtype.eventtype',compact('event_types'));
    }

    public function eventtypeform(){
        return view('backend.pages.eventtype.form');

    }

    public function storeform(Request $request){

        $request->validate([

            'name'=>'required',
            'status'=>'required',
            'description'=>'required',
    
        ]);

        Eventtype::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
     
        return redirect()->back();

    }

    public function delete($id){
        Eventtype::find($id)->delete();
        return redirect()->route('eventtype');

    }

    public function edit($id){
        $event_type = Eventtype::find($id);
        return view('backend.pages.eventtype.edit',compact('event_type'));
    }

    public function update(Request $request,$eventtype_id){
        $event_type=Eventtype::find($eventtype_id);

        $event_type->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
            
            
        ]);
        return redirect()->route('eventtype')->with('message','Updated Successfully.');


    }

    public function view(){
        return view('backend.pages.eventtype.view');

    }

    //frontend
    public function hiphop(){
        return view('frontend.pages.eventtype.hiphop');
    }
}
