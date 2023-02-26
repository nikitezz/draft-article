<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class AdminController extends Controller
{
    public function index(){
        $users = new User();
        $posts = new Post();
        $user = User::all();
        $post = Post::all();
      return view('Admin.admin',[
          'user'=>$user,
          'post'=>$post,
      ]);
    }
    public function indexDel(){
        return view('Admin.delete');
    }
    public function store(Request $request){
        $request->validate([
            'number'=>'required',
        ]);

        Post::destroy($request->number);

        return redirect('home');
    }

}
