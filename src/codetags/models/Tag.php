<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/12/15
 * Time: 18:38
 */

namespace CodePress\CodeTags\models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected  $table = "codepress_tags";

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->morphMany(\CodePress\CodeTags\models\Post::class, 'taggable');
    }
}