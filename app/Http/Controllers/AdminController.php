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
        $user = User::all();
      return view('Admin.admin',['user'=>$user]);
    }
}
