<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events(){
        return view('layouts.pages.events');
    }

    public function eventDetail(){
        return view('layouts.pages.eventDetail');
    }

    public function eventRegister(){
        return view('layouts.pages.eventRegister');
    }
}
