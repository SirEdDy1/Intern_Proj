<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    function home(){
        return view('guest.home');
    }
    function about(){
        return view('guest.about');
    }
    function news(){
        return view('guest.news');
    }
    function activity(){
        return view('guest.activity');
    }
    function schedule(){
        return view('guest.schedule');
    }
    function contact(){
        return view('guest.contact');
    }
    function gallery(){
        return view('guest.gallery');
    }
}
