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
        'user_id',  // Temporary!
        'excerpt'
    ];

    protected $dates = ['published_at'];

    /**
     * All articles which publish dates are older ot equal to now
     * @param Builder $query
     */
    public function scopePublished(Builder $query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * All articles which publish dates are in the future
     * @param Builder $query
     */
    public function scopeUnpublished(Builder $query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    public function getPublishedAtAttribute($date)
    {
        return (new Carbon($date))->format('Y-m-d');
    }

    /**
     * An article is owned to an user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * An article is owned to an user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the article
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
}
