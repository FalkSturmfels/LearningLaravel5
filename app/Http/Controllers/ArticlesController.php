<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'create']);
    }

    public function index()
    {
        // possible, but bad way to get only articles which published_at is older or equal as now.
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

        // better way with query scope see Article->scopePublished()
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        // we can also use the validation method for validation
        // Than $request must be an Illuminate\Http\Request
        /*$this->validate($request, ['title' => 'required', 'body' =>'required']);*/

        \Auth::user()->articles()->create($request->all());

        session()->flash('flash_message', "Your article has been created!");

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());

        return redirect('articles');
    }
}
