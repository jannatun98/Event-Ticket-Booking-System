<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    Public function event(){
        $event_list=Event::paginate(5);
        return view('backend.pages.event.event',  compact('event_list'));
    }

    public function eventform(){
        return view('backend.pages.event.form');
        
    }


    public function formstore(Request $request){
        // dd($request->all());
        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        $request->validate([

            'name'=>'required',
            'venue'=>'required',
            'event_type'=>'required',
            'performer_id'=>'required',
            'date'=>'required'
    
        ]);

        Event::create([
            'name'=>$request->name,
            'venue'=>$request->venue,
            'event_type'=>$request->event_type,
            'performer_id'=>$request->performer_id,
            'date'=>$request->date,
            'image'=>$fileName
        ]);

        return redirect()->back();

    }

    public function delete($id){
        $event = Event::find($id)->delete();
        return back();
    }

    public function edit($id){
        $event = Event::find($id);
        return view('backend.pages.event.edit',compact('event'));

    }

    public function update(Request $request,$event_id){
        $event=Event::find($event_id);
        $fileName=$event->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        $event->update([
            'name'=>$request->name,
            'venue'=>$request->venue,
            'event_type'=>$request->event_type,
            'performer_id'=>$request->performer_id,
            'date'=>$request->date,
            
            
        ]);
        return redirect()->route('event')->with('message','Updated Successfully.');


    }

    public function view(){
        return view('backend.pages.event.view');

    }

    //frontend
    public function eventsfront(){
        $events = Event::all();
        return view('frontend.pages.events.event',compact("events"));
    }
}
