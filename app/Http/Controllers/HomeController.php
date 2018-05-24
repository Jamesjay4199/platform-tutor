<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
