<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;   //Model
use DB; //to use SQL COMMANDS

class PostsController extends Controller
{   
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('preventBackHistory');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
 
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //when we use lsapp.dev/posts
        //$posts = Post::orderBy('title', 'asc')->get();
        //$post = Post::where('title', 'Post Two')->get();
        //To USE SQL COMMANDS HERE , use DB; -above
        //$posts = DB::select('SELECT * FROM posts');

        //Limiting the posts
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //this is fetch only one data ... 

        // retrive all posts ->  $posts = Post::all();

        //Pagination - here 1 denotes 1 post per page, set it to 10 or 5 or any number
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
        ]);

        //create post
        //we can use Post since we have used - Use App\Post model above
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        //add this id field after migrating the user_id field
        $post->user_id = auth()->user()->id;
        $post->save();
        
        //redirecting
        return redirect('/posts') -> with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //triggered when lsdev.app/posts/{{id}}
        // CONTINUE FROM HERE
        $post = Post::find($id);
        
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

       //THIS IS THE BLUNDER I DID- return view('posts.edit')->with('post', '$post');
       return view('posts.edit')->with('post', $post);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post Removed');
    }
}
