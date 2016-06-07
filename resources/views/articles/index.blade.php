@extends('App')

@section('content')

    <h1>Articles</h1>

    <hr/>
    
    @foreach($articles as $article)
        <article>
            <a href="/laravel/learningLaravel5/public/articles/{{$article->id}}">{{$article->title}}</a>

            <div class="body">{{ $article->body}}</div>
        </article>
    @endforeach
@stop