<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Tag;
use App\Picture;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     function dashboard(){
        return view('admin.dashboard');
    }
    function createpost(){
         $tags = Tag::all();
         return view('admin.createpost')->with('tags',$tags);
    }
    function login(){
        return view('admin.login');
    }
    function managegallery(){
        $pictures = Picture::orderBy('created_at','desc')->paginate(5);
        return view('admin.managegallery')->with('pictures',$pictures);
    }
    function managepost(){
        $posts = Post::orderBy('created_at','desc')->paginate(10);
         return view('admin.managepost')->with('posts',$posts);
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
            'image' => 'image|required|max:2048',
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

    public function delete($id){
        $picture = Picture::find($id);
        $picture->delete();

        return redirect('admin/gallery')->with('success','Xóa ảnh thành công');
    }
    public function admin_post_create(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required',
            'tag' => 'required',
//            'cover' => 'image|required|max:2048',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('body');
        $post->tag_id = $request->input('tag');
        $post->summary = $request->input('summary');

        if($request->hasfile('cover')){
            $file =$request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/postcovers',$filename);
            $post->cover = $filename;
        }
        else{
            return $request;
            $post->cover = '';
        }
        dd($post->save());
        return redirect('/admin/managepost');
    }
}
