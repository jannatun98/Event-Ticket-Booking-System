<?php

namespace App\Http\Controllers;

use App\Models\Performer;
use Illuminate\Http\Request;

class PerformersController extends Controller
{
    Public function performer(){
        $performers=Performer::paginate(5);
        return view('backend.pages.performer.performer',compact('performers'));
    }

    public function performerform(){
        return view('backend.pages.performer.form');

    }

    public function store(Request $request){

        $request->validate([

            'name'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'performer_type'=>'required',

    
        ]);

        Performer::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'performer_type'=>$request->performer_type,
        ]);
     
        return redirect()->back();

    }

    public function delete($id){
        Performer::find($id)->delete();
        return redirect()->route('performer');

    }

    public function edit($id){
        $performers = Performer::find($id);
        return view('backend.pages.performer.edit',compact('performers'));
    }

    public function update(Request $request,$performer_id){
        $performers=Performer::find($performer_id);

        $performers->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'performer_type'=>$request->performer_type,
            
            
        ]);
        return redirect()->route('performer')->with('message','Updated Successfully.');


    }

    public function view(){
        return view('backend.pages.performer.view');

    }
}
