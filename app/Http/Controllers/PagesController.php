<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('layouts.designs.index');
    }

    public function about(){
        return view('layouts.pages.about');
    }

    public function admission(){
        return view('layouts.pages.admission');
    }


    public function awards(){
        return view('layouts.pages.awards');
    }


    public function contactUs(){
        return view('layouts.pages.contactUs');
    }


    public function departments(){
        return view('layouts.pages.departments');
    }


    public function galleryPhoto(){
        return view('layouts.pages.galleryPhoto');
    }

    public function research(){
        return view('layouts.pages.research');
    }

    public function seminar(){
        return view('layouts.pages.seminar');
    }
}
