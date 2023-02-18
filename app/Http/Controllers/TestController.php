<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
//        $post = new Post();
//        $post->title = 'Статья 1';
//        $post->save();
//        $users = DB::table('users')->paginate(2);
//        dump($users);
//        $post = Post::limit(5)->get();
//        dd($post);
        $post = Post::all();
//        dd($post);
        return view('test',['post'=>$post]);
    }

}
