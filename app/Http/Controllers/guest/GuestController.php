<?php

namespace App\Http\Controllers\guest;

use App\Picture;
use App\Contact;
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
        $pictures = Picture::orderBy('created_at','desc')->paginate(10);
        return view('guest.gallery')->with('pictures',$pictures);
    }
    public function contact_post(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'body' =>'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->body = $request->input('body');

        $contact->save();
        return redirect('/contact')->with('success','Bạn đã gửi thư thành công');
    }
}
