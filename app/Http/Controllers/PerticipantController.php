<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Perticipant;
use Illuminate\Http\Request;

class PerticipantController extends Controller
{
    public function index()
    {
        $perticipants = Perticipant::latest()->paginate(20);
        return view('admin.perticipant.index',compact('perticipants'));
    }


    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'name' => 'required|string',
            'mobile' => 'required|numeric',
            'designation' => 'nullable|string',
            'photo' => 'nullable|mimes:jpeg,jpg,png',
        ]);
        if(!$data->passes()){
            return response()->json(['status'=>0,'errors'=>$data->errors()->toArray()]);
        }
        $data = $request->all();
        //if request has any photo
        if($request->has('image')) {
            $file = $request->file('image');
            $name_gen = rand().".".$file->getClientOriginalExtension();
            $file->move(public_path('backend/participant'),$name_gen);
            $data['photo'] = $name_gen;
        }
        Perticipant::create($data);
        return response()->json(['status'=>200,'msg'=>'Your submit success']);
    }
}
