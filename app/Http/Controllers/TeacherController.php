<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherDashboard(){
        return view('teacher.layout');
    }
}
