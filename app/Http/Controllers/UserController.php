<?php


namespace App\Http\Controllers;

use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('User.create');
    }
    public function store(Request $request){
        $request ->validate([
            'name'=>'required',
            'email'=>'required|email:rfc,dns|unique:users',
            'password'=>'required|min:8',
        ]);

        $users = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);

        Auth::login($users);
        return redirect('home');
    }
    public function loginForm(){
        return view('User.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            return redirect('home');
        }
        return request()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect('home');
    }









}
