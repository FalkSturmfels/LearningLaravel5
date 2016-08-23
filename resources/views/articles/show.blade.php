@extends('App')

@section('content')

    <h1>{{$article->title}}</h1>

    <hr/>

    <article>
        {{ $article->body}}
    </article>

    @unless($article->tags->isEmpty())
    <h4>Tags:</h4>
    <ul>
        @foreach($article->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
    @endunless
@stop