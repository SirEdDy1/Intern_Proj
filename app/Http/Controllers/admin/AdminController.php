<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Tag;
use App\Picture;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
    function managegallery(Request $request){
        $searchData = $request->get('search');
        if ($searchData !== null) {
            $pictures = Picture::orderBy('created_at','desc')
            ->where('title', 'like','%' . $searchData . '%')
            ->paginate(5);
         return view('admin.managegallery')->with('pictures',$pictures);
        }

        $pictures = Picture::orderBy('created_at','desc')->paginate(5);
        return view('admin.managegallery')->with('pictures',$pictures);
    }
    function managepost(Request $request){
        $searchData = $request->get('search');
        if ($searchData !== null) {
            $posts = Post::orderBy('created_at','desc')
            ->where('title', 'like','%' . $searchData . '%')
            ->paginate(10);
         return view('admin.managepost')->with('posts',$posts);
        }

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin.managepost')->with('posts',$posts);
    }
    function editpost($id){
        $post = Post::find($id);
        $tags = Tag::all();
        return view('admin.editpost', [
            'tags'=>$tags,
            'post'=>$post,
        ]);
    }
    function managedocument(){
        return view('admin.managedocument');
    }
    function managecontact(){
        $searchData = $request->get('search');
        if ($searchData !== null) {
            $contacts = Contact::orderBy('created_at','desc')
            ->where('name', 'like','%' . $searchData . '%')
            ->paginate(5);
         return view('admin.managecontact')->with('contacts',$contacts);
        }

        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('admin.managecontact')->with('contacts', $contacts);
    }
    public function showcontact($id){
        $contact = Contact::find($id);
        return view('admin.showcontact', [
            'contact' => $contact
        ]);
    }
    public function showpost($id){
        $post = Post::find($id);
        return view('admin.showpost', [
            'post' => $post
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

    public function deletepicture($id){
        $picture = Picture::find($id);
        $picture->delete();
        Storage::delete('public/uploads/gallerypictures'.$picture->image);

        return redirect('admin/gallery')->with('success','Xóa ảnh thành công');
    }
    public function deletepost($id){
        $post = Post::find($id);
        if($post->cover != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/uploads/postcovers'.$post->cover);
        }
        $post->delete();

        return redirect('admin/post')->with('success','Xóa bài viết thành công');
    }
    public function deletecontact($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('admin/contact')->with('success','Xóa thư thành công');
    }
    public function admin_post_create(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required',
            'tag' => 'required',
            'cover' => 'image|nullable|max:2048',
        ]);



        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('body');
        $post->tag_id = $request->input('tag');
        $post->summary = $request->input('summary');

        if($request->hasFile('cover')){
            $file =$request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/postcovers',$filename);
            $post->cover = $filename;
        } else {
            $post->cover = 'noimage.jpg';
        }

        $post->save();
        return redirect('/admin/post');
    }
    public function admin_post_edit(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required',
            'tag' => 'required',
        ]);

        if($request->hasFile('cover')){
            $file =$request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/postcovers',$filename);

        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('body');
        $post->tag_id = $request->input('tag');
        $post->summary = $request->input('summary');
        if($request->hasFile('cover')){
            $post->cover = $filename;
        }

        $post->save();
        return redirect('/admin/post');
    }
}
