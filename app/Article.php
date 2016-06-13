<?php

namespace App;

use Carbon\Carbon;
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

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
