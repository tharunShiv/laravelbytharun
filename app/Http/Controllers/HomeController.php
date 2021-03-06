<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;  //lemme try

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   $this->middleware('preventBackHistory');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = auth()->user()->id;
        //Written by Shiv, this works, without using the relationship
        $posts = Post::where('user_id', $user_id)->orderBy('created_at', 'desc')->paginate(4);
        return view('home')->with('posts', $posts);
        //$user = User::find($user_id);
        //**this line not working**  $user = User::orderBy('created_at', 'desc')->paginate(4);
        //return view('home')->with('posts', $user->posts); //since we made the relationship between the models
        //                                                  //we can use $user->post
    }
}
