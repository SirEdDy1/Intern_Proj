<?php

namespace App\Http\Controllers\guest;

use App\Post;
use App\Picture;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    function home(){
        $featuredposts = Post::orderBy('created_at','desc')->paginate(3);
        $listposts = Post::orderBy('created_at','asc')->paginate(3);
        $carouselitems = Picture::orderBy('created_at','desc')->paginate(3);
        return view('guest.home',[
            'featuredposts' => $featuredposts,
            'listposts' => $listposts,
            'carouselitems' => $carouselitems,
        ]);
    }
    function about(){
        return view('guest.about');
    }
    function news(){
        // $posts = Post::with('tag')->whereHas('tag', function($query) {
        //     $query->where('id', 1);
        // })->orderBy('created_at','desc');
        $primepost = Post::with('tag')->where('tag_id', 1)->orderBy('created_at','desc')->first();
        $listposts = Post::with('tag')->where('tag_id', 1)->orderBy('created_at','desc')->paginate(3);
        return view('guest.news',[
            'primepost' => $primepost,
            'listposts' => $listposts,
        ]);
    }
    function activity(){
        $primepost = Post::with('tag')->where('tag_id', 2)->orderBy('created_at','desc')->first();
        $listposts = Post::with('tag')->where('tag_id', 2)->orderBy('created_at','desc')->paginate(3);
        return view('guest.activity',[
            'primepost' => $primepost,
            'listposts' => $listposts,
        ]);
    }
    function schedule(){
        $primepost = Post::with('tag')->where('tag_id', 3)->orderBy('created_at','desc')->first();
        $listposts = Post::with('tag')->where('tag_id', 3)->orderBy('created_at','desc')->paginate(3);
        return view('guest.schedule',[
            'primepost' => $primepost,
            'listposts' => $listposts,
        ]);
    }
    function contact(){
        return view('guest.contact');
    }
    function gallery(){
        $pictures = Picture::orderBy('created_at','desc')->paginate(9);
        return view('guest.gallery')->with('pictures',$pictures);
    }
    public function showpost($id){
        $post = Post::find($id);
        return view('guest.display', [
            'post' => $post
        ]);
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
