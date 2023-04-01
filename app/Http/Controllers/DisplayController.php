<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;

class DisplayController extends Controller
{
    public function index(){
        $data=User::whereHas('profile')->with('profile',function($q){
            $q->with('province');
        })->get();
        // $profile_province = UserProfile::where('id',2)->with('province')->get();
        // dd($profile_province);

        return view('manage-admins',['user'=>$data]);
    }

    public function delete($id){
        $data = User::findOrFail($id);
        $data->profile->delete(); // delete child row(s) first
        $data->delete(); // delete parent row
        return redirect()->back();
    }

    public function show($id){
        $data=User::whereHas('profile')->with('profile',function($q){
            $q->with('province');
        })->find($id);
    
        return view('admin-edit',['user'=>$data]);
    }
    
    public function edit(Request $request){
        $data = User::whereHas('profile')->with('profile.province')->findOrFail($request->id);
        dd($data);
        $data->name=$request->name;
        $data->province_name=$request->province_name;
        $data->phone=$request->phone;   
        $data->email=$request->email;
        $data->save();  
        return redirect('managae-admins');
    }   
                
}  