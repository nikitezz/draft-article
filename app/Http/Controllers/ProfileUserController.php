<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index(){
        return view('User.profile');
    }
    public function create(){
        return view('Post.suggestedPost');
    }
}
