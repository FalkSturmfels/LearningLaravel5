<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @mixin \Eloquent
 */
class Article extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'excerpt'
    ];
}
