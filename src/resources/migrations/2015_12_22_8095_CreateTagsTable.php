<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/12/15
 * Time: 17:59
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable
{

    public function up(){

        Schema::create('codepress_tags', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('codepress_tags');
    }
}