<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function allCourses(){
        return view('layouts.pages.allCourses');
    }

    public function courseDetails(){
        return view('layouts.pages.courseDetails');
    }
}



