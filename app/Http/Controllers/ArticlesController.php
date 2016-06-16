<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    public function index()
    {
        // possible, but bad way to get only articles which published_at is older or equal as now.
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

        // better way with query scope see Article->scopePublished()
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        dd($article->published_at->addDays(5)->diffForHumans());

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        // we can also use the validation method for validation
        // Than $request must be an Illuminate\Http\Request
        /*$this->validate($request, ['title' => 'required', 'body' =>'required']);*/

        Article::create($request->all());

        return redirect('articles');
    }
}
