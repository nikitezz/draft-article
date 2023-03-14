<?php

namespace App\Http\Controllers;

use App\Models\SuggestedPost;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index(){
        return view('User.profile');
    }
    public function create(){
        return view('Post.suggestedPost');
    }

    public function store(Request $request){
        $this->validate($request,[
           'title'=>'required',
           'content'=>'required|max:250'
        ]);
        SuggestedPost::create($request->all());
        return redirect('profile');
    }
}
