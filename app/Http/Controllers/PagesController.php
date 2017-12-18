<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method used by Index
    public function index(){    //public function index($name){
        //return 'Hello '.$name;   you could use this to dynamically inject data from the queries
        $title = 'Welcome to the Index!';
        return view('pages.index')->with('title', $title);   // 1st way to do this - Mostly used
        //return view('pages.index', compact('title'));      // 2nd way to do this
        //return view('pages.index');
    }

    public function services(){
        $data = array(
                'title' => 'Welcome to Services page',
                'services' => ['WebDesign', 'Android App', 'SEO']
        );
         return view('pages.services')->with($data);
        //return view('pages.services');
    }

    public function about(){
        $title = 'Welcome to the About Page!';
        return view('pages.about')->with('title', $title);
        //return view('pages.about');
    }
}
