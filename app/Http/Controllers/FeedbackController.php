<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $users = Feedback::all();
        return view('feedback', ['users' => $users]);
    }

    public function create(Request $request){
    
            Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                $request->all()
            ]);
            return redirect('/home');
    }

}
