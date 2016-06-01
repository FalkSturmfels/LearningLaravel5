<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // bla
    protected $fillable = [
      'title',
      'body',
      'published_at'
    ];
}
