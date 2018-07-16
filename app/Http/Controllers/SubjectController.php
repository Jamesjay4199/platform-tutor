<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

use App\Teacher_Subject;

use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $available_subjects = Subject::all();
        $user_subjects = Teacher_Subject::where('user_id', $user_id)->get();
        return view('teacher.subjects', compact('available_subjects', 'user_subjects'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
        'subject' => 'required'
        ]);

        $user_id = auth()->user()->id;
        $subject = new Teacher_Subject;
        $subject->user_id = $user_id;
        $subject->subject_id = $request->input('subject_id');
        $subject->save();
        return back()->with('status', 'Updated Sucessfully');
    }
}
