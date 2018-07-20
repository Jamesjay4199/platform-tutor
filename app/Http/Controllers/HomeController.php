<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (Auth::user() !== null) {
           return redirect('/jobs');
       }else{
        return view('welcome');
       }
    }

    public function show()
    {
        if (Auth::user() !== null) {
            if (Auth::user()->type == 'teacher') {
                return view('teacher.jobs');
            }elseif (Auth::user()->type == 'client') {
                return view('teacher.dashboard');
            }
        }else{
            return redirect('/login');
        }
    }
    public function search()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $search = Subject::where('subject','like','%'.$search.'%')
            ->orderBy('subject')
            ->paginate(20);

            return ($search);
        return view('search',compact('search'));
    }

    public function mySearch(Request $request)
    {
    	if($request->has('search')){
    		$users = User::search($request->get('search'))->get();
    	}else{
    		$users = User::get();
    	}


    	return view('teacher.teachers', compact('users'));
    }
}
