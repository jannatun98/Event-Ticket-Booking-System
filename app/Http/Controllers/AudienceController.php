<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Audience;

class AudienceController extends Controller
{
    public function audience()
    {
        $aud_list = Audience::paginate(5);
        //dd($aud_list);

        return view('backend.pages.audience.audience', compact('aud_list'));
    }

    public function form()
    {
        return view('backend.pages.audience.form');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $fileName = null;
        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }
        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required'

        ]);


        Audience::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'image' => $fileName

        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        //dd($id);
        $audience = Audience::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        $audience = Audience::find($id);
        return view('backend.pages.audience.edit', compact('audience'));
    }

    public function update(Request $request, $audience_id)
    {

        $audience = Audience::find($audience_id);
        $fileName = $audience->image;

        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        $audience->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,


        ]);
        return redirect()->route('audience')->with('message', 'Updated Successfully.');
    }

    public function view()
    {
        return view('backend.pages.audience.view');
    }
}
