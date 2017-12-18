<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method used by Index
    public function index(){    //public function index($name){
        //return 'Hello '.$name;   you could use this to dynamically inject data from the queries
        return view('pages.index');
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }
}
