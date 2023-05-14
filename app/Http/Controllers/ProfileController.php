<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\UserProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(){
        $data = auth()->user()->profile()->first();
        return view('user.user_profile',['profile'=>$data]);
    }
    
    public function create(Request $request){
        $path ='userprofile'.DIRECTORY_SEPARATOR.auth()->user()->id;
        if($request->citizenship_documents){
            $this->checkFolderExist($path);

            $request->merge(['citizenship_documents'=>$this->makeImageWithThumb(auth()->user()->id, $request->citizenship_documents, $path)]);
        }
        if($request->citizenship_documents_back){
                  
            $this->checkFolderExist($path);
            $request->merge(['citizenship_documents_back'=>$this->makeImageWithThumb(auth()->user()->id.'_back', $request->citizenship_documents_back, $path)]);
        }
        if($request->profile_picture){  
            
            $this->checkFolderExist($path);
            $request->merge(['profile_picture'=>$this->makeImageWithThumb(auth()->user()->id.'_profile_picture', $request->profile_picture, $path)]);
        }
        $request->merge(['user_id'=>auth()->user()->id]);
        UserProfile::updateOrCreate(
            ['user_id' =>auth()->user()->id],
            $request->all()
        );
        return view('user.user_registerform2');
    }
    public function userRegister(){
        return view('user.user_registerform2');
    }
    public function edt(Request $request){
        UserProfile::updateOrCreate(['user_id' =>auth()->user()->id],
        $request->all()
    ); 
        return redirect('/home')->with('success', 'User registered successfully');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/home');
    }

public function makeImageWithThumb($slug, $photo, $path)
    {
        $ext = explode('/', explode(':', substr($photo, 0, strpos($photo, ';')))[1])[1];
        $name = $slug . '.' .$ext;
        Image::make($photo)->save($path.'/'. $name);
        Image::make($photo)->resize(1024, 700)->save($path.'/thumbs/'.'big_'.$name);//resize image
        Image::make($photo)->resize(100, 100)->save($path.'/thumbs/'.'small_'.$name);//resize image
        return '/'.$path.'/'. $name;
    }
    //check folder exits
    public function checkFolderExist($path)
    {
        if (!file_exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
            File::makeDirectory($path . '/thumbs', $mode = 0777, true, true);
        }
    }



    public function verify(Request $request, $id){
        $pan = $this->generatePan();
        //get user id
        $user = UserProfile::where('user_id', $id)->first();
        //update pan number
        $user->update(['pan_number' =>  $pan]);
        return redirect('/user-list');
    }
 //creata a function to generate unique pan id of 12 numerical digits for each users
 public function generatePan(){
    $pan = mt_rand(100000000000, 999999999999);
    return $pan;
}
}