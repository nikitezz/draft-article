<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{
    public function delete(){
        return view('Admin.admin');
    }
    public function store(Request $request){
        $request->validate([
            'number'=>'required',
        ]);

        Post::destroy($request->number);

        return redirect('home');
    }
}
