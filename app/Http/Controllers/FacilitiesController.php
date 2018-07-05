<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitiesController extends Controller
{

    public function facilities(){
        return view('layouts.pages.facilities');
    }

    public function facilitiesDetails(){
        return view('layouts.pages.facilitiesDetails');
    }
}
