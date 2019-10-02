<?php

namespace App\Http\Controllers\admin;

use App\Picture;
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
        $pictures = Picture::orderBy('created_at','desc')->paginate(5);
        return view('admin.managegallery')->with('pictures',$pictures);
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
    public function admin_image_post(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
        ]);

        $picture = new Picture;
        $picture->title = $request->input('title');
        if($request->hasfile('image')){
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gallerypictures',$filename);
            $picture->image = $filename;
        }
        else{
            return $request;
            $picture->image = '';
        }
        $picture->save();
        return redirect('/admin/gallery');
    }
}
