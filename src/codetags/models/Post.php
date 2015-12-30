<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/12/15
 * Time: 23:10
 */

namespace CodePress\CodeTags\models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected  $table = "codepress_posts";

    protected $fillable = [
        'title'.
        'content'
    ];

    public function taggable()
    {
        return $this->morphTo();

    }
}