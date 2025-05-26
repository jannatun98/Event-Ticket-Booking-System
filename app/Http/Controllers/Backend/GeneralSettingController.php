<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;

class GeneralSettingController extends Controller
{
    public function generalSetting()
    {
        $generalSetting = GeneralSetting::paginate(20);
        return view('backend.pages.general_setting.index', compact('generalSetting'));
    }

    public function form()
    {
        return view('backend.pages.general_setting.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'required',
            'website' => 'required',
        ]);

        GeneralSetting::create([
            'company_name' => $request->company_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'website' => $request->website

        ]);
        return redirect()->route('general.setting')->with('success', 'General Setting created successfully.');
    }
}
