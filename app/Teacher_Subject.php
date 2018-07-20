<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_Subject extends Model
{
    protected $table = 'teacher_subjects';

    public function user()
    {
        return $this->belongsTo('App\Subject');
    }
}
