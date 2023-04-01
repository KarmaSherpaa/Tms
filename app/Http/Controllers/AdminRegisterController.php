<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AdminRegisterController extends Controller
{
    public function store(Request $request)
    {

        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:'.User::class,
                'password' => ['required', 'confirmed'],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            
    
            UserProfile::create([
                'province_id' => $request->province_id,
                'user_id' => $user->id,
                'phone' =>$request->phone
            ]);
            event(new Registered($user));
            return redirect()->back();

        }catch(Exception $e){
            return $e->getMessage();
        
        }
        
    }
}
