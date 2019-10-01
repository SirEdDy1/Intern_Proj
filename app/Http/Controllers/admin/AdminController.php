<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     function dashboard(){
        return view('admin.dashboard');
    }
    function login(){
        return view('admin.login');
    }
    function managegallery(){
        return view('admin.managegallery');
    }
    function managepost(){
        return view('admin.managepost');
    }
    function editpost(){
        return view('admin.editpost');
    }
    function managedocument(){
        return view('admin.managedocument');
    }
    function managecontact(){
        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('admin.managecontact')->with('contacts', $contacts);
    }
    public function show($id){
        $contact = Contact::find($id);
        return view('admin.showcontact', [
            'contact' => $contact
        ]);
    }
}
