<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $subjects = Subject::where('user_id', $user_id)->get();
        // dd('subjects');
        return view('teacher.subjects', compact('subjects'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
        'subject' => 'required'
        ]);

        $subject = new Subject;
        $user_id = auth()->user()->id;
        // return json_encode($user);
        // $subject = Subject::where('user_id', $user_id)->first();
        $subject->subject = $request->subject;
        $subject->user_id = $user_id;
        $subject->save();
        return back()->with('status', 'Updated Sucessfully');
    }
}
