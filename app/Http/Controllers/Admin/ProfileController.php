<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Support\facades\Auth;

class ProfileController extends Controller
{
    public function add(Request $request)
    {

	$id = Auth::id();
	$profiles = Profile::find($request->user_id = $id);

        return view('admin.profile', ['profiles' => $profiles, 'id' =>$id]);
    }

    public function edit(Request $request)
    {	
	
	$profiles = new Profile;
	$id = Auth::id();
	$profile_id = Profile::find($request->user_id);
	$profiles_id = $id;
        $this->validate($request, Profile::$rules);
        $form = $request->all();
 
        if (isset($form['image'])) {
            $path =$request->file('image')->store('public/image');
            $profiles->image_path = basename($path);
        } else {
            $profiles->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $profiles->fill($form)->save();    

        return redirect('admin/front');
    }

    public function front(Request $request)
   {	
	$id = Auth::id();
	$profiles = Profile::find($request->user_id = $id);

	return view('admin.front', ['profiles' => $profiles, 'id' => $id]);

     }
}
