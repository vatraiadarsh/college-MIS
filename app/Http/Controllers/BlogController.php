<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('layouts.pages.blog');
    }

    public function blogDetails(){
        return view('layouts.pages.blogDetails');
    }
}
