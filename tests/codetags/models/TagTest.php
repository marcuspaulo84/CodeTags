<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/12/15
 * Time: 22:25
 */

namespace CodePress\CodeTags\Tests\Models;

use CodePress\CodeTags\models\Post;
use CodePress\CodeTags\models\Tag;
use CodePress\CodeTags\Tests\AbstractTestCase;


class TagTest extends AbstractTestCase
{

    public function setUp(){

        parent::setUp();
        $this->migrate();
    }

    public function testSeUmaTagPodeSerPersistida(){

        $tag = Tag::create(['name' => 'Tag test']);
        $this->assertEquals('Tag test', $tag->name);

        $category = Tag::all()->first();

        $this->assertEquals('Tag test', $tag->name);
    }

    public function testSePodeAtribuirUmPostParaUmaTag(){

        $tag = Tag::create(['name' => 'Tag Test']);

        $post = new Post(); //Post::create(['title' => 'Post test']);

        $post->title = 'Post test';
        $post->content = 'Post test';


        $tag->posts()->save($post);

        $this->assertEquals('Post test', $tag->posts()->first()->title);
       // $this->assertEquals('Parent Test', $category->parent->name);

        /*$list = Todolist::find(1);

        $c = new Comment();

        $c->body = 'Great work!';*/


    }

}