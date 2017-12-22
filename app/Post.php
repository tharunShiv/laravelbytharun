<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Changing the Table name , if you want
    /**
        * By Default the tabke name will be plural of what the model name is
        * Here the table name is posts
        * To change it 
    **/
    protected $table = 'posts';
    //changing the primary key
    public $primaryKey = 'id';
    //choosing whether we want the timestamp or not
    public $timestamps = true; 

    //creating a relationship with the User model so that we can use some easier code to fetch data
    public function user(){
        return $this->belongsTo('App\User');
    } 
}
