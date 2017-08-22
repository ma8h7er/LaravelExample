<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 08/08/2017
 * Time: 10:34 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'user_id', 'meta_title', 'meta_description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }
}