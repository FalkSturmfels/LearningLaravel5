<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    protected $dates = ['published_at'];

    public function scopePublished(Builder $query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished(Builder $query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
