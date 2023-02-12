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
        return view('test');
    }
}
