<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    }
    
    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|max:2048',
        ]);

        $user = auth()->user();
        if($request->hasFile('image')){
            if(File::exists(public_path($user->image))){
                File::delete(public_path($user->image));
            }
            $image = $request->file('image');
            $imageName = rand().'-'.$image->getClientOriginalName();
            $image->move(public_path('uploads/profile/'),$imageName);
            $path = 'uploads/profile/'.$imageName;
            $user->image = $path;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        toastr()->success('Profile Updated Successfully');
        return back();
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed',
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);
        toastr()->success('Password Updated Successfully');
        return redirect()->back();
    }
}