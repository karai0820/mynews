<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;
use Auth;

class ProfileController extends Controller
{
    //以下に追記
    public function add()
    {
    	return view ('admin.profile.create');
    }
    public function create(Request $request)
    {
        $this->validate($request,Profile::$rules);
        $profile = new Profile;
        $form = $request->all();

        unset($form['_token']);
        $profile->fill($form)->save();
        
    	return redirect('admin/profile/create');
    }
    public function edit()
    {
        $user_id = Auth::id();
        $profile = Profile::find($user_id);
    
        return view('admin.profile.edit',['profile_form'=>$profile]);
    	
    }
    public function update(Request $request)
    {
    	$this->validate($request,Profile::$rules);
        $profile=Profile::find($request->id);
        $form = $request->all();
        
        unset($form['_token']);
       $profile->fill($form)->save();

        $profile_history= new ProfileHistory;
        $profile_history->profile_id = $profile->id;
        $profile_history->edited_at =Carbon::now();
        $profile_history->save();

        return redirect('admin/profile/edit');
    }

}



