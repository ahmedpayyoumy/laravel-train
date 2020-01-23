<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Category;
use App\Product;
use App\User;

class PagesController extends Controller
{
    private $categories;

    public function __construct(){
        $this->categories = Category::all();
    }

    public function index(){
        return view('layout.main')->with('cats',$this->categories);
    }

    public function login(){
        return view('pages.login')->with('cats',$this->categories);
    }

    public function signup(){
        return view('pages.signup')->with('cats',$this->categories);
    }

    public function createUser(Request $request){
        $this->validate($request,[
            'username'  => 'required|min:3',
            'email'     => 'required|email',
            'password'  => 'min:8|confirmed|required'
        ]);
        $password         = $request->input('password');

        $user = new User();
        $user->name             = $request->input('username');
        $user->email            = $request->input('email');
        $user->password         = Hash::make($password);
        $user->remember_token   = Str::random(10);
        $user->save();
        return redirect('/')->with('msg',"user Created Succefully");
    }

}
