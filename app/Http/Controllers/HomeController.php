<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->get();
        return view('home', compact('posts'));
    }

    public function create(){
        return view('Post.create');
    }

    public function store(Request $request){
        $this->validate($request,[
           'title'=>'required|min:4|max:50',
           'content'=>'required|min:10|max:250'
        ]);

        Post::create($request->all());

        return redirect('home');
    }
}
