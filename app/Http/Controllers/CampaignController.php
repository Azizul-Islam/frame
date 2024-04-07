<?php

namespace App\Http\Controllers;

use App\Request\CampaingRequest;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::latest()->paginate(10);
        return view('admin.campaign.index',compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'heading_en' => 'required|string',
            'heading_bn' => 'required|string',
            'sub_heading_en' => 'required|string',
            'sub_heading_bn' => 'required|string',
            'instruction_en' => 'required|string',
            'instruction_bn' => 'required|string',
            'instruction_two_en' => 'required|string',
            'instruction_two_bn' => 'required|string',
            'description_en' => 'required|string',
            'description_bn' => 'required|string',
            'frame_one'          => 'required|mimes:jpeg,jpg,png',
            'frame_two'         => 'nullable|mimes:jpeg,jpg,png'
        ]);
        //if request has any frame
        if($request->has('frame_one')) {
            $file = $request->file('frame_one');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['frame_one'] = $name_gen;
        }
        //if request has any frame
        if($request->has('frame_two')) {
            $file = $request->file('frame_two');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['frame_two'] = $name_gen;
        }
        Campaign::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        return view('admin.campaign.edit',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        $data = $request->validate([
            'heading_en' => 'required|string',
            'heading_bn' => 'required|string',
            'sub_heading_en' => 'required|string',
            'sub_heading_bn' => 'required|string',
            'instruction_en' => 'required|string',
            'instruction_bn' => 'required|string',
            'instruction_two_en' => 'required|string',
            'instruction_two_bn' => 'required|string',
            'description_en' => 'required|string',
            'description_bn' => 'required|string',
            'frame_one'          => 'nullable|mimes:jpeg,jpg,png',
            'frame_two'         => 'nullable|mimes:jpeg,jpg,png'
        ]);
        //if request has any frame
        if($request->has('frame_one')) {
            $path = public_path('backend/images/'.$campaign->frame_one);
            if(file_exists($path) && $campaign->frame_one != null){
                unlink($path);
            }
            $file = $request->file('frame_one');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['frame_one'] = $name_gen;
        }
        //if request has any frame
        if($request->has('frame_two')) {
            $path_two = public_path('backend/images/'.$campaign->frame_two);
            if(file_exists($path_two) && $campaign->frame_two != null){
                unlink($path_two);
            }
            $file = $request->file('frame_two');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/images'),$name_gen);
            $data['frame_two'] = $name_gen;
        }
        $campaign->update($data);
        return redirect()->route('campaigns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        $path = public_path('backend/images/'.$campaign->frame_one);
        if(file_exists($path) && $campaign->frame_one != null){
            unlink($path);
        }
        $path_two = public_path('backend/images/'.$campaign->frame_two);
        if(file_exists($path_two) && $campaign->frame_two != null){
            unlink($path_two);
        }
        $campaign->delete();
        return back();
    }

    public function statusChange(Campaign $campaign)
    {
        Campaign::where('id','!=',$campaign->id)->update(['status'=>0]);
        $campaign->update(['status' => !$campaign->status]);
        return back();
    }
}
