<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        $campaign = Campaign::where('status',1)->first();
        return view('welcome',compact('setting','campaign'));
    }

    public function setLanguage($lang='en') {
        $setting = Setting::first();
        $setting->language = $lang;
        $setting->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = null;
        $setting = Setting::first();
        return view('admin.setting.create',compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'logo' => 'nullable|mimes:jpeg,jpg,png,svg',
            'company_name' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'telegram' => 'nullable|string',
        ]);
        //if request has any logo
        if($request->has('logo')) {
            $file = $request->file('logo');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['logo'] = $name_gen;
        }
        $setting = Setting::create($data);
        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'logo' => 'nullable|mimes:jpeg,jpg,png,svg',
            'company_name' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'telegram' => 'nullable|string',
        ]);
        //if request has any logo
        if($request->has('logo')) {
            $path = public_path('backend/images/'.$setting->logo);
            if(file_exists($path) && $setting->logo != null){
                unlink($path);
            }
            $file = $request->file('logo');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['logo'] = $name_gen;
        }
        $setting = $setting->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
