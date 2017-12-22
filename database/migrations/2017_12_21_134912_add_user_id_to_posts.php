<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //We created this migration
        //now adding a column
        //after saving run for the first time , the command -
        //php artisan migrate
        Schema::table('posts', function($table){
          $table->integer('user_id');   //we create this column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //to rollback adding of columns
        //when we use
        //php artisan migrate rollback
        Schema::table('posts', function($table){
          $table->dropColumn('user_id');
        });
    }
}
