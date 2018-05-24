<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\Client;
class UserController extends Controller
{
    function __construct(){
         $this->middleware('auth');
    }
    public function profile($username)
    {
    	$user = User::where('username', $username)->first();
    	if($user === null){return redirect('/');}
    	if ($user->type == 'teacher') {
    		return view('teacher.profile', ['user'=>$user]);
    	}elseif ($user->type) {
    		return view('client.dashboard');
    	}
    	
    }

    public function update(Request $request)
    {
        //dd($request->about);
        $user = User::find($request->user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->location = $request->location;
        if($user->type == 'teacher')
        {
            $user->teacher->about = $request->about;
            $user->teacher->rate = $request->rate;
            $user->teacher->qualification = $request->qualification;
            $user->teacher->save();
        }elseif($user->type == 'client')
        {
            //$user->client->
        }
        $user->save();

        return back()->with('status', 'Updated Sucessfully');
    }
}
