<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/12/15
 * Time: 23:20
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable
{

    public function up(){

        Schema::create('codepress_posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->morphs('taggable');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('codepress_posts');
    }
}